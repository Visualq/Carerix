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
 * @version Fri, 23 Sep 2011 10:20:52 +0300
 * 
 * @method int getIsPrimary getIsPrimary() - returns indication if email address is primary
 * @method void setIsPrimary setIsPrimary(int aValue) - marks/removes mark if email address is primary,
 * if email address is set as primary, another email address for this user will be unchecked
 */
class Carerix_Api_Rest_Entity_CREmailAddress extends Carerix_Api_Rest_Entity_Abstract_CREmailAddress
{

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;
       
    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isPrimary = null;
    
    /**
     * Set deleted.
     *
     * Provides a fluent interface.
     *
     * @param integer $value
     * @return Carerix_Api_Rest_Entity_Abstract_CREmailAddress
     */
    public function setDeleted($value)
    {
        $this->deleted = $value;
        return $this;
    }

    /**
     * Get deleted.
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}