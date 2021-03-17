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
 * @category  Carerix
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_DataType_NSArray extends ArrayObject implements Carerix_Api_Rest_DataType_Interface
{

    const DATA_TYPE = 'NSArray';

    const DEFAULT_ARRAY_ITEM_KEY = 'arrayitem';

    /**
     * @var string
     */
    protected $subElementName = null;

    /**
     * Converts array received from XML parser into class instance.
     *
     * @param array                   $array
     * @param ReflectionProperty|null $reflection
     *
     * @return Carerix_Api_Rest_DataType_NSArray
     */
    public static function fromArray($array, $reflection = null)
    {
        $subElementName = Carerix_Api_Rest_Entity::getVar($reflection, 'xmlSubelementName');
        $values = [];

        if (!is_array($array)) {
            return new Carerix_Api_Rest_DataType_NSArray();
        }
        foreach ($array as $k => $v) {
            switch (true) {
                case $k === Carerix_Api_Rest_DataType_NSDictionary::DATA_TYPE:
                    $type = 'Carerix_Api_Rest_DataType_NSDictionary';
                    break;

                case substr($k, 0, 2) == 'CR':
                    $type = Carerix_Api_Rest_EntityGenerator::ABSTRACT_CLASS . '_' . $k;
                    break;

                default:
                    break;
            }
            // [AY] convert single-dimensional array to multi-dimensional
            if (!is_array($v) || !array_key_exists(0, $v)) {
//                $v = array();
                // [AY] see CRToDoTest::testGetEditions1
                $v = [$v];
            }
            foreach ($v as $kk => $vv) {
                // [AY] special case when dealing with entity object
                if (substr($k, 0, 2) == 'CR') {
                    $values[] = call_user_func_array_lsb($type . '::fromArrayStatic', [$vv]);
                } else {
                    if (isset($type)) {
                        $values[] = new $type($vv);
                    } elseif ($subElementName || $k === self::DEFAULT_ARRAY_ITEM_KEY) {
                        $values[] = $vv;
                    }
                }
            }
        }
        $array = new Carerix_Api_Rest_DataType_NSArray($values);
        $array->setSubElementName($subElementName);

        return $array;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $k => $v) {
            if (
                $v instanceof Carerix_Api_Rest_DataType_NSDictionary ||
                $v instanceof Carerix_Api_Rest_Entity
            ) {
                $array[$k] = $v->toArray();
            }
        }
        return $array;
    }

    /**
     *
     * @param array            $values
     * @param SimpleXMLElement $sxe
     *
     * @return SimpleXMLElement
     */
    public function toSimpleXMLElement(&$sxe = null)
    {
        $subElementName = $this->getSubElementName();
        if ($sxe === null) {
            $sxe = new SimpleXMLElement('<' . self::DATA_TYPE . '/>');
        }

        foreach ($this as $k => $v) {
            if ($v instanceof Carerix_Api_Rest_DataType_NSDictionary) {
                $v->toSimpleXMLElement($sxe->{Carerix_Api_Rest_DataType_NSDictionary::DATA_TYPE}[]);
            } else {
                if ($v instanceof Carerix_Api_Rest_Entity) {
                    $entity = Carerix_Api_Rest_Entity::getEntityFromObject($v);
                    $v->toSimpleXMLElement($sxe->{$entity}, $v);
                } else {
                    if ($subElementName) {
                        $sxe->addChild($subElementName, $v);
                    } else {
                        $sxe->addChild(self::DEFAULT_ARRAY_ITEM_KEY, $v);
                    }
                }
            }
        }

        return $sxe;
    }

    /**
     * Hydrates to XML string
     *
     * @return string
     */
    public function toXml()
    {
        $sxe = $this->toSimpleXMLElement();
        return (!is_null($sxe)) ? $sxe->asXML() : '';
    }

    /**
     * Magic method impl.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toXml();
    }

    /**
     * @return string
     */
    public function getSubElementName()
    {
        return $this->subElementName;
    }

    /**
     * @param string $subElementName
     */
    public function setSubElementName($subElementName)
    {
        $this->subElementName = $subElementName;
    }
}
