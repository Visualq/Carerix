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
 * @version   Mon, 19 Nov 2018 11:55:45 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setHasCertificate()
 * setHasCertificate(integer $value) Set hasCertificate attribute. Provides a
 * fluent interface.
 * @method integer getHasCertificate getHasCertificate() Get hasCertificate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setInstitute()
 * setInstitute(string $value) Set institute attribute. Provides a fluent
 * interface.
 * @method string getInstitute getInstitute() Get institute attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation
 * setEmployeeEducationID() setEmployeeEducationID(integer $value) Set
 * employeeEducationID attribute. Provides a fluent interface.
 * @method integer getEmployeeEducationID getEmployeeEducationID() Get
 * employeeEducationID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation
 * setModificationDate() setModificationDate(string $value) Set modificationDate
 * attribute. Provides a fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setDiplomaTitle()
 * setDiplomaTitle(string $value) Set diplomaTitle attribute. Provides a fluent
 * interface.
 * @method string getDiplomaTitle getDiplomaTitle() Get diplomaTitle attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setName()
 * setName(string $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation
 * setToLevel1Education1()
 * setToLevel1Education1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLevel1Education1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLevel1Education1
 * getToLevel1Education1($index = null) Get toLevel1Education1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation
 * setToLevel1Education2()
 * setToLevel1Education2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLevel1Education2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLevel1Education2
 * getToLevel1Education2($index = null) Get toLevel1Education2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation
 * setToLevel1Education3()
 * setToLevel1Education3(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLevel1Education3 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLevel1Education3
 * getToLevel1Education3($index = null) Get toLevel1Education3 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation setToCountryNode()
 * setToCountryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCountryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCountryNode
 * getToCountryNode($index = null) Get toCountryNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmployeeEducation extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmployeeEducation';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $hasCertificate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       128
     */
    public $institute = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $employeeEducationID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $diplomaTitle = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $name = null;

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
     * @name toLevel1Education1
     * @default
     * @nodeType           Opleiding0
     */
    public $toLevel1Education1 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLevel1Education2
     * @default
     * @nodeType           Opleiding1
     */
    public $toLevel1Education2 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLevel1Education3
     * @default
     * @nodeType           Opleiding2
     */
    public $toLevel1Education3 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCountryNode
     */
    public $toCountryNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeEducationID");
        $entityConfiguration->setName("CREmployeeEducation");
    }
}
