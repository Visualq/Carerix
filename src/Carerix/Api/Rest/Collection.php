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

class Carerix_Api_Rest_Collection extends ArrayObject {
    
    /**
     * raw
     * @var string
     */
    protected $raw;
        
    /**
     * Total # of records.
     * 
     * count
     * @var integer
     */
    protected $totalCount;
        
    /**
     * Constructor
     *  
     * @param array $array
     * @param string $target
     */
    public function __construct($array = null, $target = null) {
        if($array === null) {
            parent::__construct();
            return;
        }
        if(!array_key_exists(0, $array)) {
            $array = array($array);
        }
        if($target !== null) {
            foreach($array as $k => $v) {
                if(is_array($v) && class_exists($target)) {
                    $v = new $target($v);
                    $array[$k] = $v;
                }
            }
        }
        parent::__construct((array) $array);
    }
    
    /**
     * Hydrates each record in a collection to array
     * 
     * @return array
     */
    public function toArray() {
        $array = array();
        foreach($this as $record) {
            if(!$record instanceof Carerix_Api_Rest_Entity &&
                !$record instanceof Carerix_Api_Rest_Collection) {
                continue;
            }
            $array[] = $record->toArray();
        }
        return $array;
    }
        
    /**
     * Hydrates collection to XML document
     * 
     * @param boolean $raw pass true to get the original XML response from the server.
     * @return string XML document
     */
    public function toXml($raw = false) {
        if($raw === true) {
            return $this->getRaw();
        }
        $xml = array();
        $xml[] = Carerix_Api_Rest_Entity::CARERIX_XML_DECLARATION."\n";
        $xml[] = '<array count="'.$this->getTotalCount().'">';
        foreach($this as $record) {
            if(!$record instanceof Carerix_Api_Rest_Entity && 
                !$record instanceof Carerix_Api_Rest_Collection) {
                continue;
            }        
            //TODO use regex 
            $xml[] = trim(str_replace(Carerix_Api_Rest_Entity::CARERIX_XML_DECLARATION, '', $record->toXML()));
        }
        $xml[] = '</array>';
        return implode('', $xml);
    }
    
    /**
     * "Unserialize" XML into Carerix_Api_Rest_Collection object
     * 
     * @uses PHP 5.3.0+ 
     * 
     * @param string $xml
     * @param string|object $class entity name contained in the collection.
     *  
     * @return Carerix_Api_Rest_Collection
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function fromXml($xml, $class) {
        if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
            if(is_object($class)) {
                $class = get_class($class);
            }        
            return call_user_func(array($class, 'fromXml'), $xml);
        }
        throw new Carerix_Api_Rest_Exception("PHP version 5.3.0+ is required to use this method.");    
    }
    
    /**
     * Save a collection. Backend doesn't support batch requests. 
     * Instead we emulate it by sending save requests for each record in the collection.
     * 
     * @param string $action [optional] specifiy a different action name to invoke.
     * @param array $parameters [optional] any extra GET parameters to send.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @return Carerix_Api_Rest_Entity
     */
    public function save($action = null, $parameters = null)
    {
        foreach($this as $record) {
            if(!$record instanceof Carerix_Api_Rest_Entity) {
                continue;
            }
            $record->save($action, $parameters);
        }        
        
        return $this;
    }
    
    /**
     * Gets count
     *
     * @return integer
     */
    public function getTotalCount() 
    {
        return $this->totalCount;
    }
    
    /**
     * Sets count
     *
     * @param integer $count count
     * @return self
     */
    public function setTotalCount($totalCount) 
    {
        $this->totalCount = $totalCount;
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
     * Computes unique id of a class. Used by array_diff
     * 
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function __toString() {
        $id = md5(serialize($this));
        return $id;
    }
    
    /**
     * Required for partial update to work correctly. Otherwise, if a property is changed in the collection
     * it will be changed in the snapshot object by reference resulting in no update of a record.
     * Thanks to Jasper for pointing this out.
     * 
     * @return self
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function __clone() {
        return unserialize(serialize($this));
    }    
}