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

class Carerix_Api_Rest_DataType_NSCalendarDate extends DateTime {
    
    const DATA_TYPE = 'NSCalendarDate';
    const CARERIX = 'Y-m-d H:i:s';
    
    /**
     * 
     * @return string
     */
    public function toString() {
        return $this->format(self::CARERIX);
    }
    
    /**
     * 
     * @return string
     */
    public function __toString() {
        return $this->toString();    
    }
}