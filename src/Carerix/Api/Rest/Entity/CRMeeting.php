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
 * @version Fri, 23 Sep 2011 10:21:09 +0300
 */
class Carerix_Api_Rest_Entity_CRMeeting extends Carerix_Api_Rest_Entity_Abstract_CRMeeting
{
    
    /**
     * Recurrence day list is a workaround for the lack of NSArray support.
     * When inserting a new appointment, the lack of NSArray support prevents
     * setting the days at which week appointments recur. Carerix development
     * has extended the API to accept a recurrenceDayList attribute, which is
     * internally exploded and set to the recurrenceDays field.
     *
     * @cx_field true
     * @access private
     * @var string
     * @mandatory 0
     * @name recurrenceDayList
     */
    public $recurrenceDayList = null;
    
    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isOpened;
    
    /**
     * @cx_field true
     * @access private
     * @var integer
     * @type NSNumber
     * @length N/A
     * @required true
     */
    public $isVisibleForAllUsers = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toActivityTypeNode
     * @nodeType Afspraak-type
     */
    public $toActivityTypeNode = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toResultNode
     * @nodeType Afspraak-resultaat
     */
    public $toResultNode = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 1
     * @nodeType Afspraak-status
     */
    public $toStatusNode = null;
    
    /**
     * Set isVisibleForAllUsers.
     *
     * Provides a fluent interface.
     *
     * @param integer $value
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setIsVisibleForAllUsers($value)
    {
        $this->isVisibleForAllUsers = $value;
        return $this;
    }

    /**
     * Get isVisibleForAllUsers.
     *
     * @return integer
     */
    public function getIsVisibleForAllUsers()
    {
        return $this->isVisibleForAllUsers;
    }
    
    /**
     * Set toActivityTypeNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_Abstract_CRNote
     */
    public function setToActivityTypeNode($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value); 
        }                 
        $this->toActivityTypeNode = $value;
        return $this;
    }

    /**
     * Get toActivityTypeNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToActivityTypeNode()
    {
        return $this->toActivityTypeNode;
    }
    
    /**
     * Set toResultNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_Abstract_CRNote
     */
    public function setToResultNode($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value); 
        }                 
        $this->toResultNode = $value;
        return $this;
    }

    /**
     * Get toResultNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToResultNode()
    {
        return $this->toResultNode;
    }
    
    /**
     * Gets isOpened
     *
     * @return integer
     */
    public function getIsOpened() 
    {
        return $this->isOpened;
    }
    
    /**
     * Sets isOpened
     *
     * @param integer $isOpened isOpened
     * @return self
     */
    public function setIsOpened($isOpened) 
    {
        $this->isOpened = $isOpened;
        return $this;
    }    
    
    /**
     * Gets recurrenceDayList
     *
     * @return string
     */
    public function getRecurrenceDayList() {
        return $this->recurrenceDayList;
    }
    
    /**
     * Sets recurrence day list
     *
     * @param string $list
     * @return self
     */
    public function setRecurrenceDayList($list) {
        $this->recurrenceDayList = $list;
        return $this;
    }    
}