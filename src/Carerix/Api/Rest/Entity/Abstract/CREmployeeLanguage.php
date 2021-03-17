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
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage
 * setEmployeeLanguageID() setEmployeeLanguageID(integer $value) Set
 * employeeLanguageID attribute. Provides a fluent interface.
 * @method integer getEmployeeLanguageID getEmployeeLanguageID() Get
 * employeeLanguageID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage
 * setModificationDate() setModificationDate(string $value) Set modificationDate
 * attribute. Provides a fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage
 * setToLanguageSpeakLevel()
 * setToLanguageSpeakLevel(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageSpeakLevel relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageSpeakLevel
 * getToLanguageSpeakLevel($index = null) Get toLanguageSpeakLevel relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage
 * setToLanguageReadLevel()
 * setToLanguageReadLevel(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageReadLevel relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageReadLevel
 * getToLanguageReadLevel($index = null) Get toLanguageReadLevel relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage
 * setToLanguageWriteLevel()
 * setToLanguageWriteLevel(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageWriteLevel relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageWriteLevel
 * getToLanguageWriteLevel($index = null) Get toLanguageWriteLevel relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage setToLanguage()
 * setToLanguage(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toLanguage
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguage getToLanguage($index =
 * null) Get toLanguage relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmployeeLanguage extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmployeeLanguage';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $employeeLanguageID = null;

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
     * @name toLanguageSpeakLevel
     * @default
     * @nodeType           Taalvaardigheid
     */
    public $toLanguageSpeakLevel = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguageReadLevel
     * @default
     * @nodeType           Taalvaardigheid
     */
    public $toLanguageReadLevel = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguageWriteLevel
     * @default
     * @nodeType           Taalvaardigheid
     */
    public $toLanguageWriteLevel = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguage
     * @default
     * @nodeType           Taal
     */
    public $toLanguage = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeLanguageID");
        $entityConfiguration->setName("CREmployeeLanguage");
    }
}
