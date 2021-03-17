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
 * @version Fri, 23 Sep 2011 10:20:51 +0300
 * 
 * @method Carerix_Api_Rest_Entity_CRDataNode setTag()
 * setTag(string $tag) Set Tag attribute. Provides a fluent
 * interface.
 * @method string getTag getTag() Get Tag attribute.
 */
class Carerix_Api_Rest_Entity_CRDataNode extends Carerix_Api_Rest_Entity_Abstract_CRDataNode
{
    /**
     * @cx_field true
     * @access private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $value = null;      

    /**
     * @cx_field true
     * @access private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $sortOrder = null;
    
    /**
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $indicationColor = null;
    
    /**
     * @cx_field true
     * @access private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $tag = null;

    /**
     * @cx_field true
     * @value_class NSArray
     * @allows_null 1
     * @access private
     */
    public $tags = null;

    /**
     * Set value.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }    
    
    /**
     * Set value.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function setSortOrder($value)
    {
        $this->sortOrder = $value;
        return $this;
    }
    
    /**
     * Get sort order.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set indicationColor.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     * @return Carerix_Api_Rest_Entity_Abstract_CRStatusInfo
     */
    public function setIndicationColor($value)
    {
        $this->indicationColor = $value;
        return $this;
    }
    
    /**
     * Get indicationColor.
     *
     * @return string
     */
    public function getIndicationColor()
    {
        return $this->indicationColor;
    }
        
    /**
     * Get data-nodes by type. 
     * 
     * @param array $parameters 
     * @param integer $hydrate [optional] hydration method 
     * @return Carerix_Api_Rest_Entity_Collection
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */        
    public static function listBy(array $parameters, $hydrate = null)
    {
        $action = 'list-by';
        $get_called_class = get_called_class();
        return self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate            
        );
    }      
}