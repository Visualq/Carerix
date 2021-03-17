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
 * @version   Mon, 19 Nov 2018 11:55:54 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setProcessDate()
 * setProcessDate(string $value) Set processDate attribute. Provides a fluent
 * interface.
 * @method string getProcessDate getProcessDate() Get processDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setIsActive()
 * setIsActive(integer $value) Set isActive attribute. Provides a fluent interface.
 * @method integer getIsActive getIsActive() Get isActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setEmailAddressKey()
 * setEmailAddressKey(integer $value) Set emailAddressKey attribute. Provides a
 * fluent interface.
 * @method integer getEmailAddressKey getEmailAddressKey() Get emailAddressKey
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setToUser()
 * setToUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set toUser relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToUser getToUser($index = null) Get
 * toUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setToToDo()
 * setToToDo(array|Carerix_Api_Rest_Entity_CRToDo $value) Set toToDo relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRToDo getToToDo getToToDo($index = null) Get
 * toToDo relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoUser setToRoleNode()
 * setToRoleNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toRoleNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToRoleNode getToRoleNode($index =
 * null) Get toRoleNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRToDoUser extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRToDoUser';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $processDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     * @isUnique    1
     */
    public $importID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $emailAddressKey = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          1
     * @destination_entity CRUser
     * @to_many            0
     * @name toUser
     * @inverseName        toDoUsers
     */
    public $toUser = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRToDo
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRToDo")
     * @mandatory          1
     * @destination_entity CRToDo
     * @to_many            0
     * @name toToDo
     * @inverseName        toDoUsers
     */
    public $toToDo = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          0
     * @destination_entity CREmployee
     * @to_many            0
     * @name toEmployee
     * @inverseName        toDoUsers
     */
    public $toEmployee = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default            1
     * @nodeType           Deelnemer-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toRoleNode
     */
    public $toRoleNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("toDoUserID");
        $entityConfiguration->setName("CRToDoUser");
    }
}
