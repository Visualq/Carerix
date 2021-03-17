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

class Carerix_Api_Rest_Exception extends Exception {
    
    /**
     * @var integer
     */
    protected $code = 500;
    
    /**
     * @var string
     */
    protected $name = __CLASS__;

    /**
     * @var string
     */
    protected $info = '';
    
    /**
     * Method overload.
     * 
     * @see Exception
     * @return void
     */
    public function __construct($message = null, $code = 0, Exception $previous = null) {
        if (version_compare(PHP_VERSION, '5.3.0', '<')) {
            parent::__construct($message, (int) $code);
            $this->_previous = $previous;
        } else {
            parent::__construct($message, (int) $code, $previous);
        }            
    
        $this->init($message);    
    }
        
    /**
     * Init properties
     * 
     * @param mixed string|Zend_Http_Response
     */
    protected function init($message) {
        switch(true) {
            case $this->isXml($message);
                $this->fromXml($message);
            break;
        
            
            default:
                $this->message = $message;    
        }            
    }
    
    /**
     * Check if message is xml string 
     *
     * @param string $value
     * @return boolean
     */            
    protected function isXml($value) {
        if(substr($value, 0, 5) == trim('<?xml')) {
            return true;
        }        
        return false;
    }
    
    /**
     * Expected format: 
     * <?xml version="1.0" encoding="utf-8"?>
     *     <NSException>
     *     <name><!-- short exception name --></name>
     *     <reason><!-- description of the exception (usually a single sentence) --></reason>
     *     <userInfo><!-- additional information, context, hints, etc. --></userInfo>
     * </NSException>
     * 
     * 
     * @param $value string
     * @return void
     */
    protected function fromXml($value) {
        try {    
            $sxe =@ new SimpleXMLElement($value);
        }
        catch(Exception $ex) {
            $this->name = 'Exception';
            $this->message = 'Unable to parse XML exception';        
            return;            
        }        
        
        $this->name = (string) $sxe->name;
        $this->message = (string) $sxe->reason;
        $this->info = (string) $sxe->userInfo;
    }        
    
    /**
     * Get exception name.
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }
        
    /**
     * Get exception info.
     * 
     * @return string
     */
    public function getInfo() {
        return $this->info;
    }    
}