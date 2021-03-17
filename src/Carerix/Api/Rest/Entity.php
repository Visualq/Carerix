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
 * @category Carerix
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @copyright Copyright (c) 2020 Carerix.com (http://www.carerix.com)
 * @license http://www.opensource.org/licenses/lgpl-license.php  LGPL
 * @link http://www.carerix.com
 * @version 2020-03-27 16:24:40Z
 */
 
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
*/

/**
 * Abstract entity class for REST entities to extend from to give ActiveRecord
 * style interface for working with REST services.
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */

require_once 'Carerix/php5.3.php';

/**
 * Port to PHP 5.2 w/ custom functionality, methods and docs
 * @author        Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @todo XML element mapping: transient.*, transient.tid, transient.nid, transient.group, transient.frequency 
 */
abstract class Carerix_Api_Rest_Entity
{
//     const DATE_FORMAT = 'Y-m-d H:i:s O';
    const CARERIX_XML_DECLARATION = '<?xml version="1.0" encoding="utf-8"?>';
    
    /**
     * PHP object - Carerix_Api_Rest_Entity|Carerix_Api_Rest_Collection
     * @var integer
     */
    const HYDRATE_OBJECT = 1;
    
    /**
     * Raw response from the REST API
     * @var integer
     */    
    const HYDRATE_NONE = 2;
    
    /**
     * Array obtained by unserializing raw response from the REST API
     * @var integer
     */        
    const HYDRATE_ARRAY = 3;
    
    /**
     * XML document obtained by hydrating PHP object
     * @var integer
     */        
    const HYDRATE_OBJECT_XML = 4;
    
    /**
     * Array obtained by hydrating PHP object
     * @var integer
     */        
    const HYDRATE_OBJECT_ARRAY = 5;
    
    /**
     * 
     * @var Carerix_Api_Rest_Manager
     */
    protected static $_manager;

    /**
     * raw
     * @var string
     */
    protected $raw;

    /**
     * $state
     * @var array
     */
    protected $state = array();
    
    /**
     * $lastParameters
     * @var array
     */
    protected $lastParameters;
    
    /**
     * $snapshot
     * @var self
     */
    protected $snapshot;
        
    /**
     * @cx_field true
     * @var array
     */
    public $attributes = null;
    
    /**
     * @cx_field true
     * stableHash - unique record identifier in transient state, e.g. 348278036
     * @var integer
     */
    public $stableHash;
    
    /**
     * @cx_field true
     * transient
     * @var Carerix_Api_Rest_DataType_Transient
     */
    protected $transient;
    
    /**
     * Reflection Class
     * @var ReflectionClass
     */
    protected $reflectionClass = null;
    
    /**
     * Property cache
     * Cache of property name and their docBlocs data
     * @var array
     */
    protected static $propertyCache = null;
    
    /**
     * Constructor
     *
     * @param array $values [optional]
     * @return void
     */
    public function __construct(array $values = null) 
    {
        if($values !== null) {
            $this->fromArray($values);
        }
    }
    
    /**
     * Gets transient
     *
     * @return array
     */
    public function getTransient() 
    {
        return $this->transient;
    }
    
    /**
     * Sets transient
     *
     * @param array $transient transient
     * @return self
     */
    public function setTransient($values) 
    {
        if($values instanceof Carerix_Api_Rest_DataType_Transient) {
            $this->transient = $values;
        } elseif(is_array($values)) {
            $this->transient = new Carerix_Api_Rest_DataType_Transient($values);
        }
        
        return $this;
    }
        
    /**
     * Set the original record state right after the read operation.
     * 
     * @param object $self
     * @return void
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    protected function setSnapshot($self) 
    {
        if($self == null) {
            $this->snapshot = null;
        }
        $this->snapshot = clone $self;
    }
       
    /**
     * Get object's dirty attributes - changed since the last read.
     * 
     * @param object $context
     * @return array of attributes that changed since the last read
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @author Jasper Stafleu <jasperstafleu@gmail.com>
     */
    protected function getObjectDirtyVars($context) 
    {
        // if there is no snapshot every attribute is considered to be dirty
        if(empty($context->snapshot)) {
            return self::getObjectVars($context);
        }
        $origVars = self::getObjectVars($context->snapshot);
        $userVars = self::getObjectVars($context);
        
        // requires object being compared implement __toString magic method
        // [AY] causes an issue. see http://stackoverflow.com/questions/4742405/array-diff-problem
        // reported and fixed by Jasper Stafleu
//        return array_diff($userVars, $origVars);
        return array_diff_assoc($userVars, $origVars);
    }
    
    /**
     * Sets Manager
     * 
     * @param Carerix_Api_Rest_Manager $manager
     * @return void
     */
    public static function setManager(Carerix_Api_Rest_Manager $manager)
    {
        self::$_manager = $manager;
    }

       /**
        * Gets Manager
        * 
        * @return Carerix_Api_Rest_Manager
        */
    public static function getManager()
    {
        return self::$_manager;
    }
    
    /**
     * Return entity as XML document.
     * 
     * @param boolean $raw pass true to get the original XML response from the server.
     * @return string XML document
     * @param boolean $dirty true render only dirty attributes, otherwise render all attributes
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function toXml($raw = false, $dirty = false) 
    {
        if($raw === true) {
            return $this->getRaw();
        }
        $sxe = null; // required!
        $sxe = $this->toSimpleXMLElement($sxe, null, $dirty);
        $xml = $sxe->asXML();
        
        return $xml;
    }

    /**
     * Template method.
     * 
     * @param Carerix_Api_Rest_EntityConfiguration $entityConfiguration
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {

    }    

    /**
     * Get entity name from php object.
     * 
     * Example: Carerix_Api_Rest_Entity_CRToDo -> toDo
     * 
     * @param object $object
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function getEntityFromObject($object) 
    {
        if(is_object($object)) {
            $class = get_class($object);
        }
        elseif(is_string($object)) {
            $class = $object;
        }
        else {
            return null;
        }
        $entity = constant($class.'::ENTITY');
        
        return $entity;      
    }
    
    /**
     * Create XML document
     * 
     * @param SimpleXMLElement $sxe
     * @param object $context
     * @param boolean $dirty true render only dirty attributes, otherwise render all attributes
     * @return SimpleXMLElement
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function toSimpleXMLElement(SimpleXMLElement &$sxe = null, $context = null, $dirty = false)
    {
        if($context === null) {
            $context = $this;
        }
        
        $vars = $dirty === false ? self::getObjectVars($context) : $this->getObjectDirtyVars($context);
        $entity = self::getEntityFromObject($context);
        
        if($sxe === null) {
            try {
                $sxe = new SimpleXMLElement(self::CARERIX_XML_DECLARATION.'<'.$entity.'/>', LIBXML_NOXMLDECL|LIBXML_COMPACT);
            }
            catch(Exception $ex) {
                throw new Carerix_Api_Rest_Exception('Unable to parse XML document');
            }
            }

        $entityID = self::getManager()->getEntityConfiguration(get_class($context))->getIdentifierKey();
        
        if(empty($vars)) {
            $tempvars = self::getObjectVars($context);
            $vars['attributes'] = $tempvars['attributes'];
            $tempvars = null;
        }
        if(array_key_exists($entityID, $vars) && isset($vars[$entityID])) {
               $sxe['id'] = $vars[$entityID];
               unset($vars[$entityID]);
        }
        
        // inject attributes into root node
        if(array_key_exists('attributes', $vars) && !empty($vars['attributes'])) {
               foreach($vars['attributes'] as $k => $v) {
                   $sxe[$k] = $v;
               }
               unset($vars['attributes']);
        }

        foreach($vars as $k => $v) {
            // [AY] don't include empty vars into XML document
            if($v === null) {
                continue;
            }
            
            // [AY] Martin Postma says: "Note: when saving, you must leave out the NSArray element! 
            // This is a known bug.
            // The NSArray element will be eliminated completely in a future release."
            if($v instanceof Carerix_Api_Rest_DataType_NSArray) {
                $v->toSimpleXMLElement($sxe->{$k}, null, $dirty);    
            }            
            else if($v instanceof Carerix_Api_Rest_DataType_NSDictionary) {
                $v->toSimpleXMLElement($sxe->{$k}, null, $dirty);
            }

            else if($v instanceof Carerix_Api_Rest_Collection) {
                foreach($v as $vv) {
                    if($vv instanceof Carerix_Api_Rest_Entity) {
                        $entity = self::getEntityFromObject($vv);
                        $this->toSimpleXMLElement($sxe->{$k}->{$entity}[], $vv, $dirty);
                    }                  
                }
            }
            else if(is_array($v)) {
                foreach($v as $kk => $vv) {
                    // [SP 21Jun2013] $v = array('NSDictionary'=>array('key'=>'value')) probably structure the same with NSArray
                    if(is_array($vv)) {
                        foreach($vv as $kkk => $vvv) {
                            $sxe->{$k}->{$kk}->{$kkk} = $vvv;
                        }
                    } else {
                        $sxe->{$k} = $vv;
                    }               
                }
            }
            else {
                if($v instanceof Carerix_Api_Rest_Entity) {
                    $entity = self::getEntityFromObject($v);
                    $this->toSimpleXMLElement($sxe->{$k}->{$entity}, $v, $dirty);
                }
                else {
                    $sxe->{$k} = $v;
                }
            }
        }
        
        // [AY] support for transient.* attributes
        if(method_exists($context, 'getTransient')) {
            $transient = $context->getTransient();
            if($transient instanceof Carerix_Api_Rest_DataType_Transient) {
                $transient->toSimpleXMLElement($sxe);
            }
        }
        
        return $sxe;
    }     

    /**
     * Check if the record exists.
     * 
     * @return boolean
     */
    public function exists()
    {
        return self::$_manager->entityExists($this);
    }

    /**
     * Get record identifier.
     * 
     * @return string
     */
    public function getIdentifierProxy()
    {
        return self::$_manager->getEntityIdentifier($this);
    }
    
    /**
     * Get Record Identifier Key
     * 
     * @return integer 
     */
    public function getIdentifierKeyProxy()
    {
        $identifierKey = self::getManager()->getEntityConfiguration(get_class($this))->getIdentifierKey();
        
        return $identifierKey;
    }
    
    /**
     * Generates a request URL
     * 
     * @return string
     */    
    public static function generateUrl(array $options = array(), $get_called_class = null)
    {
        if($get_called_class === null) {
            $get_called_class = get_called_class(); 
        }
        $configuration = self::$_manager->getEntityConfiguration($get_called_class);
        return $configuration->generateUrl($options);
    }   

    /**
     * Find an entity.
     * 
     * @param string $id
     * @param array $parameters[optional] 
     * @param integer $hydrate[optional] hydration method
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @return Carerix_Api_Rest_Entity|null
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2F.24id
     */
    public static function find($id, $parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        switch(count($args)) {
            case 1:
                $parameters = null;
                $hydrate = null;               
            break;
            
            case 2:
                $hydrate = null;
                   if(!is_array($args[1])) {
                    $parameters = null;
                    $hydrate = $args[1];
                }            
            break;
        }
        
        $get_called_class = get_called_class();
        
        $entity =  self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            $parameters,
            null,
            $hydrate
        );

        // add parameters and snapshot related of hidration politics
        // @FIXME it should be moved into execute 
        if(is_object($entity)) {
            $entity->lastParameters = $parameters;
            $entity->setSnapshot($entity);
        } else if (is_array($entity)) {
            $entity['lastParameters'] = $parameters;
            // it's not need to set shapshot for not object
        }
        
        return $entity;
    }

    /**
     * Get a colleciton of entities.
     * 
     * @param string $action [optional|default:list] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * @param integer $hydrate[optional] hydration method
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @return Carerix_Api_Rest_Entity_Collection|null collection object on success, null on failure.
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2Flist
     */
    public static function findAll($action = 'list', $parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        if(!empty($args) && is_array($args[0])) {
            $action = 'list';
            $parameters = $args[0];
            if(array_key_exists(1, $args)) {
                $hydrate = $args[1];
            } 
        }
        $get_called_class = get_called_class();

        $collection = self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            $parameters,
            null,
            $hydrate
        );
        
        // [AY] ensures isDirty works correctly for records from the collection
        if($collection instanceof Carerix_Api_Rest_Collection) {
            foreach ($collection as $entity) {
                if ($entity instanceof Carerix_Api_Rest_Entity) {
                    $entity->setSnapshot($entity);
                }
            }
        } 

        return $collection;
    }

    /**
     * Save an object.
     * 
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @return Carerix_Api_Rest_Entity
     */
    public function save($action = null, $parameters = null)
    {
        $get_called_class = get_class($this);
        
        // don't send any requests to backend if record state hasn't changed since the last read
           if(!$this->isDirty($get_called_class)) {
            return $this;
        }
                
        $exists = $this->exists();
        $method = $exists ? Carerix_Api_Rest_Client::PUT : Carerix_Api_Rest_Client::POST;
        $id = $exists ? $this->getIdentifierProxy() : null;

        // backend save method doesn't support GET query params because of WebObjects limitation per John
        $defined_vars = get_defined_vars();
        unset($defined_vars['parameters']);
        
        $path = $this->generateUrl($defined_vars, $get_called_class);
        
        $entity = self::$_manager->execute($this, $path, $method, null, $this->toXml(false, true));
        
        // empty id is a signal that backend didn't persist the entity
        $id = $entity->getId(); 
        if(empty($id)) {
            throw new Carerix_Api_Rest_Exception('The save request was sent to the REST API but it was unable to process it. Please make sure you are sending a minimum required set of attributes for your entity.');
        }
        
        if($parameters === null && $this->lastParameters === null) {
            return $entity;
        }
        
        // doesn't work in php 5.2
//        $entity = call_user_func(array($get_called_class, 'find'), $parameters ? $parameters : $this->lastParameters);
//        return $entity;

        if($parameters === null) {
            $parameters = $this->lastParameters;
        }
        
        // If we are supplied with GET query params we must re-fetch the record again.
        $path = $this->generateUrl(get_defined_vars(), $get_called_class);
        $entity = self::$_manager->execute($entity, $path, Carerix_Api_Rest_Client::GET);
        $this->setSnapshot($entity);
        
        return $entity;
    }

    /**
     * Delete an object.
     * 
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     *  
     * @return Carerix_Api_Rest_Entity
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2Flist
     */
    public function delete($action = null, $parameters = null)
    {
        $get_called_class = get_class($this);
        
        $id = $this->getIdentifierProxy();
        return self::$_manager->execute(
            $this, 
            $this->generateUrl(get_defined_vars(), $get_called_class), 
            Carerix_Api_Rest_Client::DELETE
        );
    }

    /**
     * Update an object.
     * 
     * @param string $action [optional] specify a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * @return Carerix_Api_Rest_Entity
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#POST_.24object
     */
    public function post($action = null, $parameters = null)
    {
        $get_called_class     = get_class($this);
        $id                 = $this->getIdentifierProxy();
        
        return self::$_manager->execute(
            $this, 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::POST,
            $parameters,
            $this->toXml()
        );
    }

    /**
     * Get an object.
     * 
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * @param integer $hydrate [optional] hydration method
     * @return Carerix_Api_Rest_Entity
     */    
    public function get($action = null, $parameters = null, $hydrate = null)
    {
        $get_called_class = get_class($this);
        
        return self::$_manager->execute(
            $this, 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Create a new object.
     * 
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * @return Carerix_Api_Rest_Entity
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#PUT_.24object.2F.24id
     */    
    public function put($action = null, $parameters = null)
    {
        $get_called_class = get_class($this);
        
        return self::$_manager->execute(
            $this, 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::PUT, 
            $parameters,
            $this->toXml()
        );
    }

    /**
     * Execute a generic call to the REST API 
     * 
     * @param string $method HTTP verb: GET, POST, etc.
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * @param string $body [optional] request body
     * @param integer $hydrate [optional] hydration method
     * 
     * @return mixed
     */    
    public static function execute($method, $action, $parameters = null, $body = null, $hydrate = null)
    {
        $get_called_class = get_called_class();
        
        return self::$_manager->execute(
            $get_called_class(),
            self::generateUrl(get_defined_vars(), $get_called_class),
            $method, 
            $parameters,
            $body,
            $hydrate
        );
    }
    
    /**
     * Get an attachment.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @param array $parameters e.g. array('tag' => 'logo', 'show' => array('label', 'filePath'), 'language' => 'English')
     * @param integer $hydrate [optional] hydration method
     * 
     * @return mixed Carerix_Api_Rest_Collection of Carerix_Api_Rest_Entity_CRAttachment objects|array|raw
     * 
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2Fattachment
     */
    public function attachment(array $parameters, $hydrate = null)
    {
        $get_called_class = get_class($this);
        if($get_called_class == 'Carerix_Api_Rest_Entity_CRAttachment') {
            throw new Carerix_Api_Rest_Exception('This method cannot be invoked on '.$get_called_class);
        }
        
        $entity = self::getEntityFromObject($get_called_class);
        if(!$this->getId()) {
            throw new Carerix_Api_Rest_Exception('Please load the object from the REST API first or set its id before calling this method.');
        }        
        $parameters = array_merge($parameters, array('entity' => $entity, 'id' => $this->getId()));
        $action = 'attachment';
        
        return self::$_manager->execute(
            'Carerix_Api_Rest_Entity_CRAttachment', 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }
    
    /**
     * Send an email.
     * 
     * @param array $parameters e.g. array('emailtemplate' => 'forgotpwd')
     * @param integer $hydrate [optional] hydration method 
     * @return mixed Carerix_Api_Rest_Collection of Carerix_Api_Rest_Entity_CRToDo objects|array|raw
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2Femail
     */
    public function email(array $parameters, $hydrate = null)
    {
        $get_called_class = get_class($this);
        
        // [SP 06 Feb 2014] Support request + using arbitrary parameters
//         if($get_called_class == 'Carerix_Api_Rest_Entity_CRToDo') {
//             throw new Carerix_Api_Rest_Exception('This method cannot be invoked on '.$get_called_class);
//         }
                
           $entity = self::getEntityFromObject($get_called_class);
        if(!$this->getId()) {
            throw new Carerix_Api_Rest_Exception('Please load the object from the REST API first or set its id before calling this method.');
        }              
        $parameters = array_merge($parameters, array('entity' => $entity, 'id' => $this->getId()));         
        $action = 'email';
        
        return self::$_manager->execute(
            'Carerix_Api_Rest_Entity_CRToDo', 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }
    
    /**
     * Get object schema.
     * 
     * @param array $parameters [optional]
     * @param integer $hydrate [optional] hydration method 
     * @return mixed
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_.24object.2Fdescribe
     */    
    public static function describe($parameters = null, $hydrate = self::HYDRATE_NONE)
    {
        $args = func_get_args();
        switch(count($args)) {
            case 1:
                if(!is_array($args[0])) {
                    $parameters = null;
                    $hydrate = $args[0];                    
                }
            break;
        }
                
        $get_called_class = get_called_class();
        $action = 'describe';
        if(!in_array($hydrate, array(self::HYDRATE_NONE, self::HYDRATE_ARRAY))) {
            throw new Carerix_Api_Rest_Exception('Unsupported hydration mode for '.__METHOD__);
        }
        
        return self::$_manager->execute(
            $get_called_class, 
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET, 
            $parameters,
            null,
            $hydrate
        );
    }    
    
    /**
     * Get object's Sencha Model.
     * 
     * @param array $parameters [optional]
     * @param integer $hydrate [optional] hydration method 
     * @return mixed
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @see http://cx.wiki.carerix.com/index.php/CxRest#Sencha_Models
     */    
    public static function sencha($parameters = null, $hydrate = self::HYDRATE_NONE)
    {
        $args = func_get_args();
        switch(count($args)) {
            case 1:
                if(!is_array($args[0])) {
                    $parameters = null;
                    $hydrate = $args[0];                    
                }
            break;
        }

        $action = 'sencha';
        $format = 'js';
        $get_called_class = get_called_class();
        
        if(!in_array($hydrate, array(self::HYDRATE_NONE, self::HYDRATE_ARRAY))) {
            throw new Carerix_Api_Rest_Exception('Unsupported hydration mode for '.__METHOD__);
        }
        
        return self::$_manager->execute(
            $get_called_class, 
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET, 
            $parameters,
            null,
            $hydrate
        );
    }    
    
    /**
     * Subscribe a contact person (CRUser) or a candidate (CREmployee) in your Carerix system to newsletters, groups or job alerts (except for CRUser).
     * 
     * @param array $parameters [optional] e.g. array('x-cx-subscribe-mail' => 'web-subscribe')
     * @param integer $hydrate [optional] hydration method 
     * @return Carerix_Api_Rest_Entity_CRUser|Carerix_Api_Rest_Entity_CREmployee
     */
    protected function subscribe()
    {
        $parameters = null;
        $hydrate = null;
        
        $args = func_get_args();
        switch(count($args)) {
            case 1:
                if(!is_array($args[0])) {
                    $parameters = array();
                    $hydrate = $args[0];                    
                } else {
                    $parameters = $args[0];
                }                
            break;
            
            case 2: 
                $parameters = $args[0];
                $hydrate = $args[1];                  
        }
        // [AY] subscribe operation works on documents w/ or w/o specifying id.        
//        if(!$this->getId()) {
//            throw new Carerix_Api_Rest_Exception('Please load the object from the REST API first or set id.');
//        }

        $exists = $this->exists();
        $method = $exists ? Carerix_Api_Rest_Client::PUT : Carerix_Api_Rest_Client::POST;
                
        $get_called_class = get_class($this);
        $action = 'subscribe';
        
        return self::$_manager->execute(
            $get_called_class, 
            $this->generateUrl(get_defined_vars(), $get_called_class),
            $method,
            $parameters,
            $this->toXml(),
            $hydrate
        );        
    }
    
    /**
     * 
     * Initialize an entity object from xml.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param string|SimpleXMLEelement $xml
     * @param string $class[optional]
     * @return Carerix_Api_Rest_Entity|Carerix_Api_Rest_Collection
     */
    public static function fromXml($xml, $class = null)
    {
        if($xml instanceof SimpleXMLElement) {
            $xml = $xml->asXML();
        }

        if($class === null) {
            $class = get_called_class();
        }
        
        //echo $class;
        return self::$_manager->parse($xml, $class);
    }
        
    /**
     * Populates entity based on user-defined array and initializes linked objects if any.
     * 
     * @param array $values key-value pairs
     * @return self
     */
    public function fromArray(array $values) 
    {
        $vars = self::getObjectVars($this); 
        $vars = array_merge($vars, array('id' => '')); // allow short-hand id assignment
        foreach($values as $k => $v) {
            $method = 'set'.ucfirst($k);
//             if(!in_array($k, array_keys($vars)) || !method_exists($this, $method)) {
            if(!in_array($k, array_keys($vars)) || !is_callable(array($this, $method)) ) {
                trigger_error(sprintf('No setter defined for "%s" attribute', $k), E_USER_WARNING);
                continue;
            }
            $this->$method($v);
        }        
        
        return $this;
    }
    
    /**
     * 
     * Initialize a new entity from array received from XML parser
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param array $array
     * @param Carerix_Api_Rest_Entity|string $class
     * @param Carerix_Api_Rest_EntityConfiguration|null
     * @return Carerix_Api_Rest_Entity
     */
    public static function fromArrayStatic($array = array(), $class = null, $configuration = null)
    {
        if(!is_array($array)) {
            return null;
        }
    
        $class         = (is_null($class))? get_called_class(): $class;
        $instance     = (is_object($class))? $class: new $class;
        
        $vars         = $instance->getObjectVars($instance);
        $vars_key    = array_keys($vars);
        
        $configuration = (is_null($configuration))? self::$_manager->getEntityConfiguration($class): $configuration;
        $identifierKey = $configuration->getIdentifierKey();
        
        foreach($array as $k => $v) {
            if($k == 'id') {
                $k = 'attributes';
                $v = array('id' => $v);
            }
            
            if(in_array($k, $vars_key)) {
        
                if(is_array($v)) {        
                    // set attributes
//                     if($k == 'attributes' && array_key_exists('id', $v)) {
//                         $instance->{$identifierKey} = $v['id'];
//                     }  
                                              
                    $reflection     = new ReflectionProperty($instance, $k);
                    $association     = self::getAssociationTarget($reflection);
        
                    $varType = Carerix_Api_Rest_Entity::getVar($reflection, 'value_class');
    
                    // required!
                    if($varType == Carerix_Api_Rest_DataType_NSArray::DATA_TYPE) {
                        $v = Carerix_Api_Rest_DataType_NSArray::fromArray($v[$varType], $reflection);
                    }
                    // required!                    
                    else if($varType == Carerix_Api_Rest_DataType_NSDictionary::DATA_TYPE) {
                        $v = Carerix_Api_Rest_DataType_NSDictionary::fromArray($v[$varType]);    
                    }        
                                        
                    elseif(self::isOneToOneAssociation($reflection)) {                    
                        //go up one level
                        $v = array_shift($v);
                        $v = call_user_func($association.'::fromArrayStatic', $v, $association);
                    }
                    elseif(self::isOneToManyAssociation($reflection)) {
                        
                        $entityName = Carerix_Api_Rest_Entity::getEntityFromObject($association);
                        // required! see Carerix_Api_Rest_Entity_CRUserTest::testGet2
                        if(!array_key_exists($entityName, $v)) {
                            continue;
                        }
                        
                        // wrap single record in array
                        if(!array_key_exists(0, $v[$entityName])) {
                            $v[$entityName] = array($v[$entityName]);
                        }
                        
                        $collection = new Carerix_Api_Rest_Collection();
                        if(array_key_exists('attributes', $v) && array_key_exists('count', $v['attributes'])) {
                            $collection->setTotalCount($v['attributes']['count']);
                            unset($v['attributes']);
                        }
                        // go up one level
                        $v = array_shift($v);
                                
                        if(is_array($v)) {            
                            foreach($v as $kk => $vv) {
                                if (preg_match('/(_'.$kk.')$/', $association) && is_array($vv) && is_array(current($vv))) {
                                    foreach($vv as $vvv) {
                                        $collection->append(call_user_func($association.'::fromArrayStatic', $vvv, $association));
                                    }                                
                                } else {
                                    $collection->append(call_user_func($association.'::fromArrayStatic', $vv, $association));
                                }
                            }
                        }
                        $v = $collection;
                    }
                }

                // adds $identifierKey to object
                if($k == 'attributes') {
                    if($configuration->getValue($instance, $identifierKey) === null && isset($v['id'])) {
                        $configuration->setValue($instance, $identifierKey, $v['id']);
                    }
                }
                
                $configuration->setValue($instance, $k, $v);
                
                $instance->{$k} = $v;
            } else if (preg_match('/transient\..+/', $k)) {
                // special case - transient properties
                $transient[$k] = $v;
            }
        }
        
        if(!empty($transient)) {
            $transient = Carerix_Api_Rest_DataType_Transient::fromArray($transient);
            $instance->setTransient($transient);
        }
        
        return $instance;
    }
    
    /**
     * Hydrate php objects to array with non-null values only.
     * 
     * @param boolean $dirty true to hydrate dirty attributes only, otherwise hydrate all
     * 
     * @return array
     */
    public function toArray($dirty = false) 
    {
        return self::toArrayStatic($this, $dirty);
    }    
    
    /**
     * Hydrate php objects to array with non-null values only.
     * 
     * @param Carerix_Api_Rest_Entity $instance
     * @param boolean $dirty true to hydrate dirty attributes only, otherwise hydrate all
     * 
     * @return array
     */
    public static function toArrayStatic($instance, $dirty = null) 
    {
        $vars = $dirty === false ? self::getObjectVars($instance) : $instance->getObjectDirtyVars($instance);
        $class = get_class($instance);
        $array = array();
        foreach($vars as $k => $v) {
            if($v === null || (is_array($v) && empty($v))) {
                continue;
            }
            if(is_object($v)) {        
                $reflection = new ReflectionProperty($class, $k);
                $association = self::getAssociationTarget($reflection);
                if($valueClass = self::getVar($reflection, 'value_class')) {                        
                    switch($valueClass) {
                        // cast as array
                        case Carerix_Api_Rest_DataType_NSDictionary::DATA_TYPE:
                        case Carerix_Api_Rest_DataType_NSArray::DATA_TYPE:
                            $v = (array) $v;
                        break;
                        
                        // cast the rest as string
                        default:
                            $v = (string) $v;
                    }
                }                
                else if(self::isOneToOneAssociation($reflection)) {                        
                    // convert one dimensional array to a value;
                    if(array_key_exists(0, $v)) {
                        $v = array_shift($v);
                    }
                    $v = call_user_func($association.'::toArrayStatic', $v, $dirty);
                }
                elseif(self::isOneToManyAssociation($reflection)) {
                    $objects = array();
                    foreach($v as $kk => $vv) {
                        $objects[] = call_user_func($association.'::toArrayStatic', $vv, $dirty);
                    }
                    $v = $objects;
                }
            }        
            $array[$k] = $v;
        }
        return $array;        
    }
    
    /**
     * Get var type
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param ReflectionProperty|string $reflection
     * @param string $name
     * @return string
     */
    public static function getVar($reflection, $name) 
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty)? $reflection->getDocComment(): $reflection;    
        
        preg_match('/\* \@'.preg_quote($name).' (.*)$/siUum', $propertyDoc, $matches);
        if(array_key_exists(1, $matches)) {
            return trim($matches[1]);
        }
        
        return false;        
    }
    
    /**
     * Check if property is an association.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param ReflectionProperty|string $reflection
     * @param string $type
     * @return boolean
     */
    public static function isAssociation($reflection, $type = 'OneToOne') 
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty)? $reflection->getDocComment(): $reflection;
        
        return (boolean) preg_match('/@'.$type.'/i', $propertyDoc);
    }
        
    /**
     * Check if property is one-to-one association.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param ReflectionProperty $reflection
     * @return boolean
     */
    public static function isOneToOneAssociation($reflection) 
    {
        return self::isAssociation($reflection, 'OneToOne');
    }
    
    /**
     * Check if property is one-to-many association.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param ReflectionProperty $reflection
     * @return boolean
     */
    public static function isOneToManyAssociation($reflection) 
    {
        return self::isAssociation($reflection, 'OneToMany');
    }
        
    /**
     * Get association target entity.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @param ReflectionProperty|string $reflection
     * @return string|boolean string on success, false on failure
     */
    public static function getAssociationTarget($reflection) 
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty)? $reflection->getDocComment(): $reflection;
        
        preg_match('/targetEntity=\"([^\"]+)\"/i', $propertyDoc, $matches);
        if(array_key_exists(1, $matches)) {
            return trim($matches[1]);
        }
        
        return false;
    }
    
    /**
     * Check if property has cx_filed true
     * docComment
     *
     * @param ReflectionProperty|string $reflection
     * @return boolean
     */
    public static function isCxField($reflection)
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty)? $reflection->getDocComment(): $reflection;
            
        return preg_match('/@cx_field\s+true/', $propertyDoc);
    }

    /**
     * Set id.
     * 
     * Alias for set$objectNameID() method.
     *
     * Provides a fluent interface.
     *
     * @param integer $id
     * @return self
     */
    public function setId($value)
    {
        // doesn't take into account special naming cases
        $entity = get_class($this);
        $identifierKey = Carerix_Api_Rest_EntityGenerator::getIdentifierKey($entity);
        self::getManager()->setEntityIdentifier($this, $value);
        
        return $this;
    }

    /**
     * Set id.
     *
     * Alias for get$objectNameID() method.
     *
     * @return string
     */
    public function getId()
    {
        $identifierKey = self::getManager()->getEntityConfiguration(get_class($this))->getIdentifierKey();
        if(property_exists($this, $identifierKey)) {
            return $this->{$identifierKey};
        }
        
        return $this->attributes['id'];
    }
        
    /**
     * Set attributes
     * 
     * @param array $value
     * @return self
     */
    public function setAttributes($value)
    {
        $this->attributes = $value;
        
        return $this;
    }

    /**
     * Get attributes
     * 
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    /**
     * Gets stableHash
     *
     * @return integer
     */
    public function getStableHash() 
    {
        return $this->stableHash;
    }
    
    /**
     * Sets stableHash
     *
     * @param integer $stableHash stableHash
     * @return self
     */
    public function setStableHash($stableHash) 
    {
        $this->stableHash = $stableHash;
        
        return $this;
    }    
    
    /**
     * Gets raw
     *
     * @return string
     */
    public function getRaw() 
    {
        return $this->raw;
    }
    
    /**
     * Sets raw
     *
     * @param string $raw raw
     * @return self
     */
    public function setRaw($raw) 
    {
        $this->raw = $raw;
        
        return $this;
    }
        
    /**
     * Custom impl. of get_object_vars
     * 
     * @param Carerix_Api_Rest_Entity $context object to extract variables from
     * @return array
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function getObjectVars(Carerix_Api_Rest_Entity $context) 
    {    
        $props = $context->getPropertyCache();
        $props = array_keys($props);
        $vars  = array();
        foreach($props as $item) {
            $vars[$item] = $context->{$item};
        }
        
        return $vars;
    }
    
    /**
     * Returns true if the record is dirty, false otherwise
     * 
     * @return boolean
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function isDirty() 
    {
        $vars = $this->getObjectDirtyVars($this);
        
        return !empty($vars);    
    }
    
    
    /**
     * @see Carerix_Api_Rest_Client::getLastRequest
     */
    public static function getLastRequest()
    {
        $args = func_get_args();
        return call_user_func_array(array(self::getManager()->getClient(), 'getLastRequest'), $args);
    }
    
    /**
     * @see Carerix_Api_Rest_Client::getLastResponse
     */
    public static function getLastResponse()
    {
        return self::getManager()->getClient()->getLastResponse();
    }        
        
    /**
     * Computes unique id of a class. Used by array_diff
     * 
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function __toString() 
    {
        $id = md5(serialize($this));
        
        return $id;
    }
    
    /**
     * EXPERIMENTAL
     * 
     * Implements magic getters and setters for all public class properties with tag @cx_Field true.
     * Feel free to declare your getters and setters to provide your own implementation. 
     * 
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments) 
    {    
        $action                 = substr($name, 0, 3);
        $property             = lcfirst(substr($name, 3));
        $reflectionProperty = $this->getPropertyCache($property);
        $value                 = (isset($arguments[0]))? $arguments[0]: null;
        
        if($reflectionProperty !== false) {
            $valueClass         = $reflectionProperty['value_class'];
            $associationTarget     = $reflectionProperty['targetEntity'];
            
            if($action === 'set') {
                if($reflectionProperty['OneToOne']) {
                    if(is_array($value)) {
                        $value = new $associationTarget($value);
                    }                    
                }
                else if ($reflectionProperty['OneToMany']) {
                    if(is_array($value)) {
                        $value = new Carerix_Api_Rest_Collection($value, $associationTarget);
                    }                    
                }
                else if (in_array($valueClass, array(Carerix_Api_Rest_DataType_NSArray::DATA_TYPE, Carerix_Api_Rest_DataType_NSDictionary::DATA_TYPE))) {
                    if(is_array($value)) {
                        $class = 'Carerix_Api_Rest_DataType_'.$valueClass;
                        $value = new $class($value);
                    }                    
                }
                  $this->{$property} = $value;
                return $this;
            }
            else if($action === 'get') {
                if ($reflectionProperty['OneToMany']) {
                    // try to read a collection element by $index
                    if(is_int($value)) {
                        return $this->{$property}[$value];
                    }                     
                }
                return $this->{$property};
            }
        } else {
            // [AY] can be used as a replacement for 'method_exists' and 'property_exists',
            // Reason: method_exists doesn't work with magic methods; property_exists doesn't work with non-public properties
            // when PHP 5.2 support will be dropped all properties in Carerix_Api_Entity_* namespace will be converted to protected.  
            throw new Carerix_Api_Rest_Exception(sprintf('property "%s" does not exist', $property));
        }
    }

    /**
     * @param string $propertyName - Name of the field, like applyTags, id, etc.
     * @param string $attributeName - Name of the attribute from this field
     *
     * @return string
     */
    protected function getAttributeValueByPropertyName($propertyName, $attributeName)
    {
        return Carerix_Api_Rest_Entity::getVar(
            $this->getReflectionClass()->getProperty($propertyName),
            $attributeName
        );
    }

    /**
     * Gets ReflectionClass
     * 
     * @return ReflectionClass
     */
    protected function getReflectionClass()
    {
        if(is_null($this->reflectionClass)) {
            $this->reflectionClass = new ReflectionClass($this);
        }
        
        return $this->reflectionClass;
    }
    
    /**
     * Fill the cache of properties name and docBlock data
     * 
     * @return void
     */
    protected function initPropertyCache()
    {
        $class = get_class($this);
        $reflection     = $this->getReflectionClass();
        $propertyList     = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);    
        if(!isset(self::$propertyCache)) {
            self::$propertyCache = array();
        }        
        if(!isset(self::$propertyCache[$class])) {
            self::$propertyCache[$class] = array();
        } else {
            return;
        }
        foreach($propertyList as $item) {
            $docComment = $item->getDocComment();
            if(self::isCxField($docComment)) {
                self::$propertyCache[$class][$item->getName()] = array(
                    'value_class'    => self::getVar($docComment, 'value_class'),
                    'targetEntity'     => self::getAssociationTarget($docComment),
                    'OneToOne'         => self::isOneToOneAssociation($docComment),
                    'OneToMany'        => self::isOneToManyAssociation($docComment),        
                );
            }
        }
    }
    
    /**
     * Gets Property Cache
     * 
     * @param string $index
     * @return array|false
     */
    protected function getPropertyCache($index = null)
    {
        $class = get_class($this);
        $this->initPropertyCache();
        if(is_null($index)){
            return self::$propertyCache[$class];
        }
        
        return (array_key_exists($index, self::$propertyCache[$class]))? self::$propertyCache[$class][$index]: false;
    }

    public function __wakeup() {
        //reset reflectionClass cache cause "Failed to retrieve the reflection object" error
        //happens when trying to get reflectionClass after object was serialized and unserialized
        $this->reflectionClass = null;
    }
}