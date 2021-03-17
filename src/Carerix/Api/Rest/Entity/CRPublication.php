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
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link http://www.carerix.com
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version Fri, 23 Sep 2011 10:20:59 +0300
 */
class Carerix_Api_Rest_Entity_CRPublication extends Carerix_Api_Rest_Entity_Abstract_CRPublication
{
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $postingMappings = null;

    /**
     * Set postingMappings.
     *
     * Provides a fluent interface.
     *
     * @param Carerix_Api_Rest_DataType_NSDictionary|array $value [optional]
     * @return Carerix_Api_Rest_Entity_Abstract_CRPublication
     */
    public function setPostingMappings($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_DataType_NSDictionary($value);
        }
        $this->postingMappings = $value;
        return $this;
    }

    /**
     * Get postingMappings.
     *
     * @return Carerix_Api_Rest_DataType_NSDictionary|array
     */
    public function getPostingMappings()
    {
        return $this->postingMappings;
    }
        
    /**
     * Get a list of published jobs. 
     * 
     * @param array $parameters [optional]
     * @param integer $hydrate [optional] hydration method
     * 
     * @return Carerix_Api_Rest_Collection
     * 
     * @see http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_publication.2Flist-by
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */        
    public static function listBy($parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        switch(count($args)) {
            case 1:
                   if(!is_array($args[0])) {
                    $parameters = array();
                    $hydrate = $args[0];
                }            
            break;
        }
                
        return Carerix_Api_Rest_Entity_CRPublication::findAll('list-by', $parameters, $hydrate);
    }
}