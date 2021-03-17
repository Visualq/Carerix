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

class Carerix_Api_Rest_ResponseTransformer_CustomResponseTransformer2 extends Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer
{
    /**
     * 
     * @var mixed SimpleXMLElement|array
     */
    protected $adapter = null;
    
    /**
     * Get transformer adapter.
     * 
     * @return  mixed SimpleXMLElement|array|null
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
                return $this->adapter->getName();
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
     * @param string $data
     * @return array|null
     */
    public function xmlToArray($data)
    {
        if(version_compare(PHP_VERSION, '5.2.11', '>=')) {
            $libxml_disable_entity_loader = libxml_disable_entity_loader(true);
        }
        
        libxml_use_internal_errors(true);        
        $this->adapter = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NONET | LIBXML_NOBLANKS);
        if(!$this->adapter) {
            $errors = array('Failed loading XML');
            foreach(libxml_get_errors() as $error) {
                $errors[] = $error->message;
            }
            throw new Carerix_Api_Rest_Exception(implode("\n", $errors));
        }
        $json = json_encode($this->adapter);
        $array = json_decode($json, true);
        $array = $this->normalizeXmlArray($array);
        
        if(version_compare(PHP_VERSION, '5.2.11', '>=')) {
            libxml_disable_entity_loader($libxml_disable_entity_loader);
        }
        
        return $array;
    }
    
    /**
     * Normalize array format for BC reasons.
     * 
     * @param array $array
     * @return void
     */
    protected function normalizeXmlArray($array) {
        foreach($array as $k => $v) {
            /**
             * handles empty text nodes. example:
             *             [CRAgency] => Array
                (
                    [@attributes] => Array
                        (
                            [id] => 24
                        )

                    [0] => 

                )
             */
            if(is_int($k) && is_string($v) && trim($v) === '') {
                unset($array[$k]);
            }
            /**
             * converts @attributes to attributes. example:
             *             [CRAgency] => Array
                (
                    [@attributes] => Array
                        (
                            [id] => 24
                        )

                )
             */            
            else if($k === '@attributes') {
                $array['attributes'] = $array[$k];
                unset($array[$k]);
            }
            else if(is_array($v)) {
                $array[$k] = $this->normalizeXmlArray($v);
            }
        }
        return $array;
    }
    
    /**
     * Transforms JSON encoded string into array.
     * 
     * @param string $data
     * @return array|null
     */
    public function jsonToArray($data)
    {
        $this->adapter = json_decode($data, true);
        return $this->adapter;
    }
}
