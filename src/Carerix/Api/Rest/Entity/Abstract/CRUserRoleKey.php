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
 * @ THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE.
 * DO NOT MODIFY IT. YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE
 * IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 *
 * @category  Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://development.wiki.carerix.com/index.php/CxRest
 * @copyright Copyright 2011-2018 Carerix (http://www.carerix.com). All rights
 * reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version   Mon, 19 Nov 2018 11:55:56 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRUserRoleKey setUserRoleKey()
 * setUserRoleKey(string $value) Set userRoleKey attribute. Provides a fluent
 * interface.
 * @method string getUserRoleKey getUserRoleKey() Get userRoleKey attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRUserRoleKey setValue()
 * setValue(string $value) Set value attribute. Provides a fluent interface.
 * @method string getValue getValue() Get value attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRUserRoleKey setUserRoleID()
 * setUserRoleID(integer $value) Set userRoleID attribute. Provides a fluent
 * interface.
 * @method integer getUserRoleID getUserRoleID() Get userRoleID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRUserRoleKey setToUserRole()
 * setToUserRole(array|Carerix_Api_Rest_Entity_CRUserRole $value) Set toUserRole
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUserRole getToUserRole getToUserRole($index =
 * null) Get toUserRole relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRUserRoleKey extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRUserRoleKey';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       128
     */
    public $userRoleKey = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       128
     */
    public $value = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $userRoleID = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUserRole
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUserRole")
     * @mandatory          0
     * @destination_entity CRUserRole
     * @to_many            0
     * @name toUserRole
     */
    public $toUserRole = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("userRoleKeyID");
        $entityConfiguration->setName("CRUserRoleKey");
    }
}
