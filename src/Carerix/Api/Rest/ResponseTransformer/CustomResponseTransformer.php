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
 * @copyright Copyright © 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */

class Carerix_Api_Rest_ResponseTransformer_CustomResponseTransformer extends Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer
{
    /**
     * 
     * @var mixed XML_Unserializer|array
     */
    protected $adapter = null;
    
    /**
     * Get transformer adapter.
     * 
     * @return  mixed XML_Unserializer|null
     */
    public function getAdapter() {
        return $this->adapter;
    }
     
    /**
     * Get root name of response tree.
     * 
     * @return string
     */
    public function getRootName() {
        switch ($this->_entityConfiguration->getResponseType()) {
            case 'xml':
                return $this->adapter->getRootName();
            break;
            
            case 'json':
                $array = array_keys($this->adapter);
                return $array[0];
                break;
        }
    }
        
    /**
     * (non-PHPdoc)
     * @see Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer::transform()
     */
    public function transform($data)
    {
        $array = array();
        switch ($this->_entityConfiguration->getResponseType()) {
            case 'xml':
                $array = $this->xmlToArray($data);
            break;
            
            case 'json':
                $array = $this->jsonToArray($data);
                break;
        }

        return $array;
    }

    /**
     * Transforms XML string into array.
     * 
     * @param string $xml
     * @return array|null
     */
    public function xmlToArray($xml)
    {
        $this->adapter = new XML_Unserializer();
        $options = array(
            XML_UNSERIALIZER_OPTION_ATTRIBUTES_PARSE => true,
            XML_UNSERIALIZER_OPTION_ATTRIBUTES_ARRAYKEY => 'attributes',
        );
        if($this->adapter->unserialize($xml, false, $options) === false) {
            return null;
        }
        $array = $this->adapter->getUnserializedData();  
        if(PEAR::isError($array) || !$array) {
            return null;
        }      
        return $array;
    }
    
    /**
     * Transforms JSON encoded string into array.
     * 
     * @param string $json
     * @return array|null
     */
    public function jsonToArray($json)
    {
        $this->adapter = (array) json_decode($json);
        return $this->adapter;
    }
}