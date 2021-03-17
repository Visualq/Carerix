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
 * @version Fri, 23 Sep 2011 10:21:05 +0300
 */
class Carerix_Api_Rest_Entity_CRWeekHour extends Carerix_Api_Rest_Entity_Abstract_CRWeekHour
{
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $hours = null;
    
    /**
     * Get hours.
     *
     * @return Carerix_Api_Rest_DataType_NSArray|array
     */
    public function getHours() {
        return $this->hours;
    }

    /**
     * Set hours.
     *
     * Provides a fluent interface.
     *
     * @param Carerix_Api_Rest_DataType_NSArray|array $value [optional]
     * @return Carerix_Api_Rest_Entity_CRWeekHour
     */
    public function setHours($value) {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_DataType_NSArray($value);
        }
        $this->hours = $value;
        return $this;
    }
}