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
 * @version   Mon, 19 Nov 2018 11:55:52 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setIsFinal()
 * setIsFinal(integer $value) Set isFinal attribute. Provides a fluent interface.
 * @method integer getIsFinal getIsFinal() Get isFinal attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setStatusName()
 * setStatusName(string $value) Set statusName attribute. Provides a fluent
 * interface.
 * @method string getStatusName getStatusName() Get statusName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setDisplayName()
 * setDisplayName(string $value) Set displayName attribute. Provides a fluent
 * interface.
 * @method string getDisplayName getDisplayName() Get displayName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setStatusValue()
 * setStatusValue(integer $value) Set statusValue attribute. Provides a fluent
 * interface.
 * @method integer getStatusValue getStatusValue() Get statusValue attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setStatusInfoID()
 * setStatusInfoID(integer $value) Set statusInfoID attribute. Provides a fluent
 * interface.
 * @method integer getStatusInfoID getStatusInfoID() Get statusInfoID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setIndicationColor()
 * setIndicationColor(string $value) Set indicationColor attribute. Provides a
 * fluent interface.
 * @method string getIndicationColor getIndicationColor() Get indicationColor
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setNotActive()
 * setNotActive(integer $value) Set notActive attribute. Provides a fluent
 * interface.
 * @method integer getNotActive getNotActive() Get notActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setIsDefault()
 * setIsDefault(integer $value) Set isDefault attribute. Provides a fluent
 * interface.
 * @method integer getIsDefault getIsDefault() Get isDefault attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setIsJobDefault()
 * setIsJobDefault(integer $value) Set isJobDefault attribute. Provides a fluent
 * interface.
 * @method integer getIsJobDefault getIsJobDefault() Get isJobDefault attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setStatusGroupID()
 * setStatusGroupID(string $value) Set statusGroupID attribute. Provides a fluent
 * interface.
 * @method string getStatusGroupID getStatusGroupID() Get statusGroupID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setIsSuccessfullyFilled()
 * setIsSuccessfullyFilled(integer $value) Set isSuccessfullyFilled attribute.
 * Provides a fluent interface.
 * @method integer getIsSuccessfullyFilled getIsSuccessfullyFilled() Get
 * isSuccessfullyFilled attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setTemplateReferences()
 * setTemplateReferences(array|Carerix_Api_Rest_Collection $values) Set
 * templateReferences relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTemplateReference
 * getTemplateReferences getTemplateReferences() Get templateReferences
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setEmailTemplates()
 * setEmailTemplates(array|Carerix_Api_Rest_Collection $values) Set emailTemplates
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREmailTemplate
 * getEmailTemplates getEmailTemplates() Get emailTemplates relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setToProductGroupNode()
 * setToProductGroupNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductGroupNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductGroupNode
 * getToProductGroupNode($index = null) Get toProductGroupNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setToCategoryNode()
 * setToCategoryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCategoryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCategoryNode
 * getToCategoryNode($index = null) Get toCategoryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setParents()
 * setParents(array|Carerix_Api_Rest_Collection $values) Set parents relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRStatusInfo
 * getParents getParents() Get parents relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setChildren()
 * setChildren(array|Carerix_Api_Rest_Collection $values) Set children
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRStatusInfo
 * getChildren getChildren() Get children relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setToStatusInfoGroupNode()
 * setToStatusInfoGroupNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusInfoGroupNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusInfoGroupNode
 * getToStatusInfoGroupNode($index = null) Get toStatusInfoGroupNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRStatusInfo setNames()
 * setNames(array|Carerix_Api_Rest_Collection $values) Set names relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRStatusInfoName
 * getNames getNames() Get names relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRStatusInfo extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRStatusInfo';

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
    public $isFinal = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $statusName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $displayName = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $statusValue = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $statusInfoID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       20
     */
    public $indicationColor = null;

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
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $notActive = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isJobDefault = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $notes = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $statusGroupID = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isSuccessfullyFilled = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTemplateReference")
     * @mandatory          0
     * @destination_entity CRTemplateReference
     * @to_many            1
     * @name templateReferences
     */
    public $templateReferences = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREmailTemplate")
     * @mandatory          0
     * @destination_entity CREmailTemplate
     * @to_many            1
     * @name emailTemplates
     */
    public $emailTemplates = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProductGroupNode
     * @default
     * @nodeType           Productgroep
     */
    public $toProductGroupNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCategoryNode
     * @default
     * @nodeType           Kandidaat-categorie
     */
    public $toCategoryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRStatusInfo")
     * @mandatory          0
     * @destination_entity CRStatusInfo
     * @to_many            1
     * @name parents
     */
    public $parents = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRStatusInfo")
     * @mandatory          0
     * @destination_entity CRStatusInfo
     * @to_many            1
     * @name children
     */
    public $children = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusInfoGroupNode
     */
    public $toStatusInfoGroupNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRStatusInfoName")
     * @mandatory          0
     * @destination_entity CRStatusInfoName
     * @to_many            1
     * @name names
     */
    public $names = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("statusInfoID");
        $entityConfiguration->setName("CRStatusInfo");
    }


}
