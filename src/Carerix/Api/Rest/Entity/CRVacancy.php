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
 * @version Fri, 23 Sep 2011 10:21:04 +0300
 * 
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancy setToContact()
 * setToContact(array|Carerix_Api_Rest_Entity_CRUser $value) Set toContact
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRContact getToContact getToContact($index =
 * null) Get toContact relationship.
 */
class Carerix_Api_Rest_Entity_CRVacancy extends Carerix_Api_Rest_Entity_Abstract_CRVacancy
{
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toProvinceNode = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     * @nodeType Groep-Vacature
     */
    public $groupNodes = null;
    
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toContact
     */
    public $toContact = null;
    
    /**
     * Set toProvinceNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_Abstract_CRVacancy
     */
    public function setToProvinceNode($value)
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value); 
        }                 
        $this->toProvinceNode = $value;
        return $this;
    }

    /**
     * Get toProvinceNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToProvinceNode()
    {
        return $this->toProvinceNode;
    }
    
}