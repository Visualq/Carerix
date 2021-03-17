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
 * @version Fri, 23 Sep 2011 10:21:11 +0300
 */
class Carerix_Api_Rest_Entity_CRDraft extends Carerix_Api_Rest_Entity_Abstract_CRDraft
{

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toDelayUnitNode
     * @nodeType Uitstel-eenheid
     */
    public $toDelayUnitNode = null;
    
    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $notes = null;
    
    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type
     * @value_type_human
     */
    public $delay = null;
    
    /**
     * Set toDelayUnitNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_Abstract_CRDraft
     */
    public function setToDelayUnitNode($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toDelayUnitNode = $value;
        return $this;
    }
    
    /**
     * Get toDelayUnitNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToDelayUnitNode()
    {
        return $this->toDelayUnitNode;
    }
    
    /**
     * Set notes.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     * @return Carerix_Api_Rest_Entity_Abstract_CRMeeting
     */
    public function setNotes($value)
    {
        $this->notes = $value;
        return $this;
    }
    
    /**
     * Get notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set delay.
     *
     * Provides a fluent interface.
     *
     * @param integer $value [optional]
     * @return Carerix_Api_Rest_Entity_Abstract_CREmail
     */
    public function setDelay($value)
    {
        $this->delay = $value;
        return $this;
    }
    
    /**
     * Get delay.
     *
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }
}