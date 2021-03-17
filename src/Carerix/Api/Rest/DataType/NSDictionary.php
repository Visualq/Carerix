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
class Carerix_Api_Rest_DataType_NSDictionary extends ArrayObject implements Carerix_Api_Rest_DataType_Interface
{
    const DATA_TYPE = 'NSDictionary';

    /**
     * Converts array into class instance.
     *
     * @param array $array
     *
     * @return Carerix_Api_Rest_DataType_NSDictionary
     */
    public static function fromArray($array)
    {
        if (!is_array($array)) {
            return new Carerix_Api_Rest_DataType_NSDictionary();
        }
        $values = [];
        foreach ($array as $k => $v) {
            $k = self::normalize($k);
            if (is_array($v)) {
                $dataType = key($v);
                if ($dataType == Carerix_Api_Rest_DataType_NSArray::DATA_TYPE) {
                    $v = Carerix_Api_Rest_DataType_NSArray::fromArray($v[$dataType]);
                }
            }
            $values[$k] = $v;
        }
        return new Carerix_Api_Rest_DataType_NSDictionary($values);
    }

    /**
     * Magic getter impl.
     *
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this)) {
            return $this[$name];
        }
        return null;
    }

    /**
     * Magic setter impl.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        return $this[$name] = $value;
    }

    /**
     * Hydrates each record in a collection to array
     *
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $k => $v) {
            $k = self::normalize($k);
            $array[$k] = $v;
        }
        return $array;
    }

    /**
     * Transform key that is not a valid XML element name (because it starts with a digit, for example) is prefixed
     * with an underscore.
     *
     * @param unknown_type $key
     */
    protected static function normalize($key)
    {
        if (substr($key, 0, 1) == '_') {
            $key = substr($key, 1);
        }
        return $key;
    }

    /**
     * Hydrates object to SimpleXMLElement
     *
     * @param array            $values
     * @param SimpleXMLElement $sxe
     *
     * @return SimpleXMLElement
     */
    public function toSimpleXMLElement(&$sxe = null)
    {
        if ($sxe === null) {
            $sxe = new SimpleXMLElement('<' . self::DATA_TYPE . '/>');
        }
        foreach ($this as $k => $v) {
            //key that is not a valid XML element name (because it starts with a digit, for example) is prefixed with an underscore.
            if (!preg_match(self::XML_ELEMENT_NAME_REGEX, $k)) {
                $k = '_' . $k;
            }

            if (is_array($v)) {
                $v = new Carerix_Api_Rest_DataType_NSArray($v);
            }

            if ($v instanceof Carerix_Api_Rest_DataType_NSArray) {
                if ($sxe->getName() == self::DATA_TYPE) {
                    $v->toSimpleXMLElement($sxe->$k->{Carerix_Api_Rest_DataType_NSArray::DATA_TYPE});
                } else {
                    $v->toSimpleXMLElement($sxe->{self::DATA_TYPE}->$k->{Carerix_Api_Rest_DataType_NSArray::DATA_TYPE});
                }
            } elseif ($sxe->getName() == self::DATA_TYPE) {
                // if root element is already named as self::DATA_TYPE
                $sxe->$k = $v;
            } else {
                $sxe->{self::DATA_TYPE}->$k = $v;
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
}
