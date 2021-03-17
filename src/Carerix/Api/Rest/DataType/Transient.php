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
 
/**
 * @category Carerix
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */

class Carerix_Api_Rest_DataType_Transient extends ArrayObject implements Carerix_Api_Rest_DataType_Interface {
    /**
     * 
     * @var String
     */
    const DATA_TYPE = 'transient';
    
    /**
     * Converts array into class instance.
     * 
     * @param array $array
     * @return Carerix_Api_Rest_DataType_Transient
     */
    public static function fromArray($array) {
        if(!is_array($array)) {
            return new Carerix_Api_Rest_DataType_Transient();
        }
        $values = array();
        foreach($array as $k => $v) {
            $k = self::normalize($k);
            $values[$k] = $v;
        }
        return new Carerix_Api_Rest_DataType_Transient($values);
    }
    
    /**
     *  
     * @param string $key
     * @return string
     */
    protected static function normalize($key) {
        if(stristr($key, self::DATA_TYPE.'.')) {
            return substr($key, strlen(self::DATA_TYPE.'.'));
        }
        return $key;        
    }
        
    /**
     * 
     * @return array
     */
    public function toArray() {
        $array = array();
        foreach($this as $k => $v) {
             $k = self::normalize($k);            
            $array[$k] = $v;    
        }
        return $array;
    }
    
    /**
     * 
     * @param array $values
     * @param SimpleXMLElement $sxe
     * @return SimpleXMLElement
     */
    public function toSimpleXMLElement(&$sxe = null) {

        foreach($this as $k => $v) {
            $sxe->{self::DATA_TYPE.'.'.$k} = $v;    
        }            
        
        return $sxe;
    }
    
    /**
     * Computes unique id of a class. Used by array_diff
     * 
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function __toString() {
        $id = md5(serialize($this));
        return $id;
    }    
}