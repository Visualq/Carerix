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
 * @version Fri, 23 Sep 2011 10:20:50 +0300
 * 
 * @method Carerix_Api_Rest_Entity_Abstract_CRCompany setLogo()
 * setLogo(Carerix_Api_Rest_CRAttachment $value) Set logo
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAttachment
 * getLogo getLogo() Get Logo relationship.

 */
class Carerix_Api_Rest_Entity_CRCompany extends Carerix_Api_Rest_Entity_Abstract_CRCompany
{
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default
     * @nodeType Opdrachtgever-status
     */
    public $toStatusNode = null;
    
   /**
     * @cx_field true
     * @access private
     * @var array
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name users
     */
    public $users;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     * @nodeType Groep-Opdrachtgever
     */
    public $groupNodes = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_CRAttachment
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 0
     * @name attachments
     */
    public $logo = null;
    
    /**
     * Set toStatusNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_Company
     */
    public function setToStatusNode($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toStatusNode = $value;
        return $this;
    }
    
    /**
     * Get toStatusNode.
     *
     * @return Carerix_Api_Rest_Entity_Data_Node
     */
    public function getToStatusNode()
    {
        return $this->toStatusNode;
    }
    
    
    /**
     * Get owner.
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     */
    public function getOwner()
    {
        return $this->owner;
    }
    
    /**
     * Set owner.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRUser $value
     * @return Carerix_Api_Rest_Entity_CRCompany
     */
    public function setOwner($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }
    
    /**
     * Set users.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Collection $values
     * @return Carerix_Api_Rest_Entity_CRCompany
     */
    public function setUsers($values)
    {
        if(is_array($values)) {
            $values = new Carerix_Api_Rest_Collection($values, 'Carerix_Api_Rest_Entity_CRUser'); 
        } 
        $this->users = $values;
        return $this;
    }
    
    /**
     * Get users.
     *
     * @param $index [optional] integer get an item at specified index
     * @return Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUser
     */
    public function getUsers($index = null)
    {
        if($index !== null) {
            return $this->users[$index];
        }
        return $this->users;
    }    
}