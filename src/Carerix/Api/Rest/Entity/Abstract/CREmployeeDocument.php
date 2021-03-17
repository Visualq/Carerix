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
 * @version   Mon, 19 Nov 2018 11:55:44 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument
 * setEmployeeDocumentID() setEmployeeDocumentID(integer $value) Set
 * employeeDocumentID attribute. Provides a fluent interface.
 * @method integer getEmployeeDocumentID getEmployeeDocumentID() Get
 * employeeDocumentID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument
 * setModificationDate() setModificationDate(string $value) Set modificationDate
 * attribute. Provides a fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setValidUntilDate()
 * setValidUntilDate(string $value) Set validUntilDate attribute. Provides a fluent
 * interface.
 * @method string getValidUntilDate getValidUntilDate() Get validUntilDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setToDocumentNode()
 * setToDocumentNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toDocumentNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToDocumentNode
 * getToDocumentNode($index = null) Get toDocumentNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setToAttachment()
 * setToAttachment(array|Carerix_Api_Rest_Entity_CRAttachment $value) Set
 * toAttachment relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAttachment getToAttachment
 * getToAttachment($index = null) Get toAttachment relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmployeeDocument extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmployeeDocument';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $creationDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $employeeDocumentID = null;

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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $validUntilDate = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name createdBy
     */
    public $createdBy = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name modifiedBy
     */
    public $modifiedBy = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          0
     * @destination_entity CREmployee
     * @to_many            0
     * @name toEmployee
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
     * @name toDocumentNode
     */
    public $toDocumentNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRAttachment
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAttachment")
     * @mandatory          0
     * @destination_entity CRAttachment
     * @to_many            0
     * @name toAttachment
     */
    public $toAttachment = null;

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

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeDocumentID");
        $entityConfiguration->setName("CREmployeeDocument");
    }
}
