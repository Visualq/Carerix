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
 * @category  Carerix
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @copyright Copyright (c) 2020 Carerix.com (http://www.carerix.com)
 * @license   http://www.opensource.org/licenses/lgpl-license.php  LGPL
 * @link      http://www.carerix.com
 * @version   2020-03-27 16:24:40Z
 */

/**
 * @category  Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.carerix.com
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version   Fri, 23 Sep 2011 10:21:12 +0300
 */
class Carerix_Api_Rest_Entity_CRContact extends Carerix_Api_Rest_Entity_Abstract_CRContact
{
    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddressBusiness = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     * @nodeType           Groep-Contactpersoon
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groups
     * @nodeType           Groep-Contactpersoon
     */
    public $groups = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default
     * @nodeType           Contact-status
     */
    public $toStatusNode = null;

    /**
     * Set emailAddressBusiness.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     *
     * @return Carerix_Api_Rest_Entity_Abstract_CRContact
     */
    public function setEmailAddressBusiness($value)
    {
        $this->emailAddressBusiness = $value;
        return $this;
    }

    /**
     * Get emailAddressBusiness.
     *
     * @return string
     */
    public function getEmailAddressBusiness()
    {
        return $this->emailAddressBusiness;
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
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     */
    public function setOwner($value)
    {
        if (is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }
}
