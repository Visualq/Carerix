<?php

/**
 * Carerix PHP Library
 *
 * LICENSE
 *
 * This source file is subject to the LGPL license that is
 * available through the world-wide-web at this URL:
 * http://www.opensource.org/licenses/lgpl-license.php
 *
 * @category  Carerix
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @copyright Copyright (c) 2020 Carerix.com (http://www.carerix.com)
 * @license   http://www.opensource.org/licenses/lgpl-license.php  LGPL
 * @link      http://www.carerix.com
 * @version   2020-03-27 16:24:40Z
 */

/**
 *
 * @category  Carerix
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_EntityGenerator
{

    const API_ENDPOINT = 'https://api.carerix.com';
    const ABSTRACT_CLASS = 'Carerix_Api_Rest_Entity';
    const COLLECTION_CLASS = 'Carerix_Api_Rest_Collection';

    /**
     *
     * List of entities to generate data models for
     *
     * @var array
     */
    protected $entities;

    /**
     * endpoint
     *
     * @var string
     */
    protected $endpoint = self::API_ENDPOINT;

    /**
     * username
     *
     * @var string
     */
    protected $username;

    /**
     * password
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @param string $entity
     *
     * @throws Exception
     */
    public function getScheme($entity)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getEndpoint() . '/' . $entity . '/describe');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Expect:']);
        curl_setopt($ch, CURLOPT_PROXY, 'localhost:8888');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, __CLASS__);

        $username = $this->getUsername();
        $password = $this->getPassword();

        if ($username && $password) {
            curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
        }

        $result = curl_exec($ch);

        if (!$result) {
            $errorNumber = curl_errno($ch);
            $error = curl_error($ch);
            curl_close($ch);

            throw new Exception($errorNumber . ': ' . $error);
        }

        curl_close($ch);

        return $result;
    }

    /**
     * Generate abstract classes
     *
     * @param string $dir where to generate classes
     *
     * @return void
     */
    public function build($dir = null)
    {
        foreach ($this->getEntities() as $entity) {
            try {
                $xml = $this->getScheme($entity);
            } catch (Exception $ex) {
                continue;
            }

            $sxe = new SimpleXMLElement($xml);

            $entityClassName = self::ABSTRACT_CLASS . '_Abstract_' . $this->getEntityClassName($entity);
            $entityClassFileName = $this->getEntityClassFileName($entityClassName);
            $entityPath = $dir . '/' . $entityClassFileName;

            $class = new Zend_CodeGenerator_Php_Class();
            $class->setAbstract(true);
            $class->setName($entityClassName);
            $class->setExtendedClass(self::ABSTRACT_CLASS);
            $class->setDocblock(self::getClassDocblock());

            // add constants
            $class->setProperty(
                [
                    'name' => 'ENTITY',
                    'const' => true,
                    'defaultValue' => $entity,
                ]
            );
            $this->addCommonMethods($entity, $class);

            // attributes
            foreach ($sxe->attribute as $attribute) {
                $this->addAttribute($class, $attribute);

                if ((string)$attribute['name'] === 'additionalInfo') {
                    $attribute['name'] = 'additionalInfoPartial';
                    $this->addAttribute($class, $attribute);
                }
            }

            // relationships
            foreach ($sxe->relationship as $relationship) {
                $this->addRelationship($class, $relationship);
            }

            $this->mkdir($entityPath);
            $file = new Zend_CodeGenerator_Php_File();
            $file->setClass($class);

            file_put_contents($entityPath, $file->generate());
            $sxe = $xml = $class = $code = null;

            // build concrete classes
            $entityClassName = self::ABSTRACT_CLASS . '_' . $this->getEntityClassName($entity);
            $entityClassFileName = $this->getEntityClassFileName($entityClassName);
            $entityPath = $dir . '/' . $entityClassFileName;

            $class = new Zend_CodeGenerator_Php_Class();
            $class->setName($entityClassName);
            $class->setExtendedClass(self::ABSTRACT_CLASS . '_Abstract_' . $this->getEntityClassName($entity));
            $class->setDocblock(self::getClassDocblock());

            $this->mkdir($entityPath);

            // don't override existing concrete classes
            if (file_exists($entityPath)) {
                continue;
            }

            $file = new Zend_CodeGenerator_Php_File();
            $file->setClass($class);

            file_put_contents($entityPath, $file->generate());
            $class = $code = null;
        }
    }

    /**
     * Entity property: generate an attribute and corresponding mutators.
     *
     * @param Zend_CodeGenerator_Php_Class $class
     * @param SimpleXMLElement             $attribute
     */
    protected function addAttribute(Zend_CodeGenerator_Php_Class &$class, SimpleXMLElement $attribute)
    {
        $paramType = self::normalizeVarType($attribute['value-class']);
        $optional = self::isOptionalAttribute($attribute);
        $property = [
            'name' => (string)$attribute['name'],
            'visibility' => Zend_CodeGenerator_Php_Property::VISIBILITY_PUBLIC,
            'docblock' => [
                'tags' => [
                    [
                        'name' => 'cx_field',
                        'description' => 'true',
                    ],
                    [
                        'name' => 'access',
                        'description' => 'private',
                    ],
                    [
                        'name' => 'var',
                        'description' => $paramType,
                    ],
                    [
                        'name' => 'value_class',
                        'description' => $attribute['value-class'],
                    ],
                    [
                        'name' => 'allows_null',
                        'description' => $attribute['allows-null'],
                    ],
                ],
            ],
        ];

        switch ($attribute['value-class']) {
            case 'NSString':
            case 'PRBitVector':
                $property = array_merge_recursive(
                    $property,
                    [
                        'docblock' => [
                            'tags' => [
                                [
                                    'name' => 'width',
                                    'description' => $attribute['width'],
                                ],
                            ],
                        ],
                    ]
                );
                break;

            case 'NSNumber':
                $property = array_merge_recursive(
                    $property,
                    [
                        'docblock' => [
                            'tags' => [
                                [
                                    'name' => 'value_type',
                                    'description' => $attribute['value-type'],
                                ],
                                [
                                    'name' => 'value_type_human',
                                    'description' => self::normalizeValueType($attribute['value-type']),
                                ],
                            ],
                        ],
                    ]
                );
                break;
        }

        // @see GET /CRDataNode/describe
        if (property_exists($attribute, 'isUnique')) {
            $property = array_merge_recursive(
                $property,
                [
                    'docblock' => [
                        'tags' => [
                            [
                                'name' => 'isUnique',
                                'description' => (string)$attribute->isUnique,
                            ],
                        ],
                    ],
                ]
            );
        }

        //Set sublement name for NSArray
        if (property_exists($attribute, 'xmlSubelementName')) {
            $property = array_merge_recursive(
                $property,
                [
                    'docblock' => [
                        'tags' => [
                            [
                                'name' => 'xmlSubelementName',
                                'description' => (string)$attribute->xmlSubelementName,
                            ],
                        ],
                    ],
                ]
            );
        }

        // set default value if any
        if (isset($attribute['default'])) {
            $property = array_merge_recursive(
                $property,
                [
                    'defaultValue' => (int)$attribute['default'],
                ]
            );
        }

        $methodName = ucfirst($attribute['name']);
        $setMethodName = 'set' . $methodName;
        $getMethodName = 'get' . $methodName;
        $classTagSetter = [
            'name' => 'method',
            'description' => $class->getName(
            ) . ' ' . $setMethodName . '() ' . $setMethodName . '(' . $paramType . ' $value) Set ' . $attribute['name'] . ' attribute. Provides a fluent interface.',
        ];
        $classTagGetter = [
            'name' => 'method',
            'description' => $paramType . ' ' . $getMethodName . ' ' . $getMethodName . '() Get ' . $attribute['name'] . ' attribute.',
        ];

        $classTags = [$classTagSetter, $classTagGetter];

//         $methodSet = new Zend_CodeGenerator_Php_Method();
//         $docblockSet = new Zend_CodeGenerator_Php_Docblock();
//         $docblockSet->setShortDescription('Set '.$attribute['name'].'.');
//         $docblockSet->setLongDescription('Provides a fluent interface.');
//         $docblockSet->setTags(array(
//             array(
//                 'name' => 'param',
//                 'description' => $paramType.' $value'.
//                 ($optional ? ' [optional]' : '').'',
//             ),
//             array(
//                 'name' => 'return',
//                 'description' => $class->getName(),
//             ),
//         ));

//         $methodSet->setDocblock($docblockSet);
//         $methodSet->setName('set'.ucfirst($attribute['name']));
//         $methodSet->setParameter(array(
//             'name' => 'value',
//         ));
//         $methodSet->setBody('$this->'.$attribute['name'].' = $value;'."\n".'return $this;');

//         switch($attribute['value-class']) {
//             case 'NSArray':
//             case 'NSDictionary':
//                 $methodSet->setBody('if(is_array($value)) {
//     $value = new Carerix_Api_Rest_DataType_'.$attribute['value-class'].'($value);
// }
// $this->'.$attribute['name'].' = $value;
// return $this;');
//             break;

//         }
//         $methodGet = new Zend_CodeGenerator_Php_Method();
//         $docblockGet = new Zend_CodeGenerator_Php_Docblock();
//         $docblockGet->setShortDescription('Get '.$attribute['name'].'.');
//         $docblockGet->setTags(array(
//             array(
//                 'name' => 'return',
//                 'description' => $paramType,
//             ),
//         ));

//         $methodGet->setDocblock($docblockGet);
//         $methodGet->setName('get'.ucfirst($attribute['name']));
//         $methodGet->setBody('return $this->'.$attribute['name'].";\n");

        try {
            $class->setProperty($property);
            $class->getDocblock()->setTags($classTags);
//             $class->setMethod($methodSet);
//             $class->setMethod($methodGet);
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    /**
     * Entity relationship: generate an attribute and corresponding mutators.
     *
     * @param Zend_CodeGenerator_Php_Class $class
     * @param SimpleXMLElement             $relationship
     */
    protected function addRelationship(Zend_CodeGenerator_Php_Class &$class, SimpleXMLElement $relationship)
    {
        $paramType = self::ABSTRACT_CLASS . '_' . $relationship['destination-entity'];
        $property = [
            'name' => (string)$relationship['name'],
            'visibility' => Zend_CodeGenerator_Php_Property::VISIBILITY_PUBLIC,
            'docblock' => [
                'tags' => [
                    [
                        'name' => 'cx_field',
                        'description' => 'true',
                    ],
                    [
                        'name' => 'access',
                        'description' => 'private',
                    ],
                    [
                        'name' => 'var',
                        'description' => self::isMany($relationship) ? self::COLLECTION_CLASS : $paramType,
                    ],
                    // doctrine-style docblock
                    [
                        'name' => self::isMany($relationship) ? 'OneToMany' : 'OneToOne',
                        'description' => '(targetEntity="' . $paramType . '")',
                    ],
                    [
                        'name' => 'mandatory',
                        'description' => $relationship['mandatory'],
                    ],
                    [
                        'name' => 'destination_entity',
                        'description' => $relationship['destination-entity'],
                    ],
                    [
                        'name' => 'to_many',
                        'description' => $relationship['to-many'],
                    ],
                    [
                        'name' => 'name',
                        'description' => $relationship['name'],
                    ],
                ],
            ],
        ];
        // [SP 24 Feb 2014] Depricated since v1.2.9, Gemini task#3718
//         if(property_exists($relationship, 'qualifier')) {
//             $property = array_merge_recursive($property, array(
//                 'docblock' => array(
//                     'tags' => array(
//                         array(
//                             'name' => 'qualifier',
//                             'description'  => (string) $relationship->qualifier,
//                         ),
//                     )
//             )));
//         }
        if (property_exists($relationship, 'default')) {
            $property = array_merge_recursive(
                $property,
                [
                    'docblock' => [
                        'tags' => [
                            [
                                'name' => 'default',
                                'description' => (string)$relationship->default,
                            ],
                        ],
                    ],
                ]
            );
        }
        if (property_exists($relationship, 'nodeType')) {
            $property = array_merge_recursive(
                $property,
                [
                    'docblock' => [
                        'tags' => [
                            [
                                'name' => 'nodeType',
                                'description' => (string)$relationship->nodeType,
                            ],
                        ],
                    ],
                ]
            );
        }
        // @see GET /CRDataNode/describe
        if (property_exists($relationship, 'inverseName')) {
            $property = array_merge_recursive(
                $property,
                [
                    'docblock' => [
                        'tags' => [
                            [
                                'name' => 'inverseName',
                                'description' => (string)$relationship->inverseName,
                            ],
                        ],
                    ],
                ]
            );
        }

        $methodName = ucfirst($relationship['name']);
        $setMethodName = 'set' . $methodName;
        $getMethodName = 'get' . $methodName;
        $classTagSetter = [
            'name' => 'method',
            'description' => $class->getName() . ' ' . $setMethodName . '() ' . $setMethodName . '(' . (self::isMany(
                $relationship
            ) ? 'array|' . self::COLLECTION_CLASS . ' $values' : 'array|' . $paramType . ' $value') . ') Set ' . $relationship['name'] . ' relationship. Provides a fluent interface.',
        ];
        $classTagGetter = [
            'name' => 'method',
            'description' => (self::isMany(
                $relationship
            ) ? self::COLLECTION_CLASS . '|' . $paramType : $paramType) . ' ' . $getMethodName . ' ' . $getMethodName . '(%s) Get ' . $relationship['name'] . ' relationship.',
        ];

        if (self::isMany($relationship)) {
            $classTagGetter['description'] = sprintf($classTagGetter['description'], '');
        } else {
            $classTagGetter['description'] = sprintf($classTagGetter['description'], '$index = null');
        }

        $classTags = [$classTagSetter, $classTagGetter];

//         $methodSet = array(
//             'name' => 'set'.ucfirst((string)$relationship['name']),
//             'visibility' => Zend_CodeGenerator_Php_Property::VISIBILITY_PUBLIC,
//             'parameters' => array(
//                 array(
//                     'name' => self::isMany($relationship) ? 'values' : 'value',
//                 )
//             ),
//             'docblock' => array(
//                 'shortDescription' => 'Set '.$relationship['name'].'.',
//                 'longDescription' => 'Provides a fluent interface.',
//                 'tags' => array(
//                     array(
//                         'name' => 'param',
//                         'description' => self::isMany($relationship) ? 'array|'.self::COLLECTION_CLASS.' $values' : 'array|'.$paramType.' $value',
//                     ),
//                     array(
//                         'name' => 'return',
//                         'description' => $class->getName(),
//                     ),
//                 )
//             ),
//             'body' => self::isMany($relationship) ?
//                 'if(is_array($values)) {
//     $values = new '.self::COLLECTION_CLASS.'($values, \''.$paramType.'\');
// }
// $this->'.$relationship['name'].' = $values;'."\n".'return $this;' :

//                 'if(is_array($value)) {
//     $value = new '.$paramType.'($value);
// }
// $this->'.$relationship['name'].' = $value;'."\n".'return $this;',

//         );
//         $methodGet = array();
//         if(self::isMany($relationship)) {
//             $methodGet = array(
//                 'parameters' => array(
//                     array(
//                         'name' => 'index',
//                         'defaultValue' => null,
//                     )
//                 ),
//                 'docblock' => array(
//                     'tags' => array(
//                         array(
//                             'name' => 'param',
//                             'description' => '$index [optional] integer get an item at specified index',
//                         ),
//                     )
//                 )
//             );
//         }

//         $methodGet = array_merge_recursive($methodGet, array(
//             'name' => 'get'.ucfirst((string)$relationship['name']),
//             'visibility' => Zend_CodeGenerator_Php_Property::VISIBILITY_PUBLIC,

//             'docblock' => array(
//                 'shortDescription' => 'Get '.$relationship['name'].'.',
//                 'tags' => array(
//                     array(
//                         'name' => 'return',
//                         'description' => self::isMany($relationship) ? self::COLLECTION_CLASS.'|'.$paramType : $paramType,
//                     ),
//                 )
//             ),
//             'body' => self::isMany($relationship) ?
//             'if($index !== null) {
//     return $this->'.$relationship['name'].'[$index];
// }
// return $this->'.$relationship['name'].';' :
//             'return $this->'.$relationship['name'].';',
//         ));

        try {
            $class->setProperty($property);
            $class->getDocblock()->setTags($classTags);
//             $class->setMethod($methodSet);
//             $class->setMethod($methodGet);
        } catch (Exception $ex) {
        }
    }


    /**
     * Carerix integer type description.
     *
     * @param string $value
     *
     * @return string
     */
    public static function normalizeValueType($value)
    {
        switch ($value) {
            case 's':
                return 'short integer (16 bits)';
                break;
            case 'i':
                return 'long integer (32 bits)';
                break;
        }
    }

    /**
     * Add shared methods to all classes
     *
     * @param string $entity
     * @param Zend_CodeGenerator_Php_Class $class
     *
     * @return void
     */
    protected function addCommonMethods($entity, Zend_CodeGenerator_Php_Class &$class)
    {
        $class->setMethods(
            [
                [
                    'name' => 'configure',
                    'static' => true,
                    'visibility' => Zend_CodeGenerator_Php_Method::VISIBILITY_PUBLIC,
                    'parameter' => [
                        'name' => 'entityConfiguration',
                        'type' => 'Carerix_Api_Rest_EntityConfiguration',
                    ],
                    'body' => 'parent::configure($entityConfiguration);' . PHP_EOL .
                        '$entityConfiguration->setIdentifierKey("' . self::getIdentifierKey($entity) . '");' . PHP_EOL .
                        '$entityConfiguration->setName("' . $entity . '");',
                ],
            ]
        );
    }

    /**
     * Converts entity names using different patterns.
     *
     * @param String $entity
     * @param String $explode
     * @param String $implode
     */
    public static function getEntityName($entity, $explode = '-', $implode = '_')
    {
        $parts = explode($explode, $entity);
        $parts = array_map('ucfirst', $parts);
        return implode($implode, $parts);
    }

    /**
     *
     * @param string $entity
     *
     * @return string
     */
    public static function getIdentifierKey($entity)
    {
        if (substr($entity, 0, 2) == 'CR') {
            $entity = substr($entity, 2);
        }
        $entity = lcfirst($entity);
        return $entity . 'ID';
    }

    /**
     *
     * @param string $entity
     *
     * @return string
     */
    public static function getEntityClassName($entity)
    {
        return $entity;
    }

    /**
     *
     * @param string $entity
     *
     * @return string
     */
    public static function getEntityClassFileName($entity)
    {
        return self::getEntityName($entity, '_', '/') . '.php';
    }

    /**
     *
     * @param string $filename
     *
     * @return void
     */
    protected function mkdir($filename)
    {
        $dir = dirname($filename);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    /**
     *
     * @param SimpleXMLElement $element
     *
     * @return boolean
     */
    protected static function isMany(SimpleXMLElement $element)
    {
        return (string)$element['to-many'] == '1' ? true : false;
    }

    /**
     *
     * @param SimpleXMLElement $element
     *
     * @return boolean
     */
    protected static function isOptionalAttribute(SimpleXMLElement $element)
    {
        return (string)$element['allows-null'] == '1' ? true : false;
    }

    /**
     *
     * @param SimpleXMLElement $element
     *
     * @return boolean
     */
    protected static function isOptionalRelationship(SimpleXMLElement $element)
    {
        return (string)$element['mandatory'] == '0' ? true : false;
    }

    /**
     * Maps Carerix variable type to PHP type
     *
     * @param string $type
     *
     * @return string
     */
    protected static function normalizeVarType($type)
    {
        switch ($type) {
            default:
            case 'NSData':
            case 'NSCalendarDate':
            case 'NSString':
            case 'PRBitVector':
                return 'string';
                break;

            case 'NSNumber':
                return 'integer';
                break;

            case 'NSDecimalNumber':
                return 'float';
                break;

            case 'NSArray':
                return 'Carerix_Api_Rest_DataType_NSArray|array';
                break;

            case 'NSDictionary':
                return 'Carerix_Api_Rest_DataType_NSDictionary|array';
                break;
        }
    }

    /**
     *
     * @return array
     */
    public static function getClassDocblock()
    {
        return [
            'tags' => [
                [
                    'name' => '',
                    'description' => 'THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT. YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.',
                ],
                [
                    'name' => 'category',
                    'description' => 'Carerix',
                ],
                [
                    'name' => 'licence',
                    'description' => 'http://www.opensource.org/licenses/lgpl-license.php LGPL',
                ],
                [
                    'name' => 'link',
                    'description' => 'http://development.wiki.carerix.com/index.php/CxRest',
                ],
                [
                    'name' => 'copyright',
                    'description' => 'Copyright 2011-' . date(
                        'Y'
                    ) . ' Carerix (http://www.carerix.com). All rights reserved.',
                ],
                [
                    'name' => 'author',
                    'description' => 'Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>',
                ],
                [
                    'name' => 'version',
                    'description' => date('r'),
                ],
            ],
        ];
    }

    /**
     *
     * @param string $value
     *
     * @return string
     */
    protected static function getDefaults($value)
    {
        $defaults = explode(',', $value);
        $defaults = array_map('trim', $defaults);
        return $defaults;
    }

    /**
     *
     * @param string $value
     *
     * @return string
     */
    protected static function getDefault($value)
    {
        $parts = explode('=', $value);
        $parts = array_map('trim', $parts);
        return $parts;
    }

    /**
     *
     * @param string $value
     *
     * @return string
     */
    protected static function keyPathToArray($value)
    {
        $parts = explode('.', $value);
        return $parts;
    }

    /**
     * Sets entities
     *
     * @param array $entities entities
     *
     * @return self
     */
    public function setEntities($entities)
    {
        $this->entities = $entities;
        return $this;
    }

    /**
     * Gets entities
     *
     * @return array
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Gets endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets endpoint
     *
     * @param string $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }
}
