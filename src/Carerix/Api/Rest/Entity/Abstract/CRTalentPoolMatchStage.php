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
 * @ THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE.
 * DO NOT MODIFY IT. YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE
 * IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @category Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link http://development.wiki.carerix.com/index.php/CxRest
 * @copyright Copyright 2011-2018 Carerix (http://www.carerix.com). All rights
 * reserved.
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version Mon, 19 Nov 2018 11:56:03 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setCreationDate() setCreationDate(string $value) Set creationDate attribute.
 * Provides a fluent interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setIsFinal()
 * setIsFinal(integer $value) Set isFinal attribute. Provides a fluent interface.
 * @method integer getIsFinal getIsFinal() Get isFinal attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setCode()
 * setCode(string $value) Set code attribute. Provides a fluent interface.
 * @method string getCode getCode() Get code attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setTalentPoolMatchStageID() setTalentPoolMatchStageID(integer $value) Set
 * talentPoolMatchStageID attribute. Provides a fluent interface.
 * @method integer getTalentPoolMatchStageID getTalentPoolMatchStageID() Get
 * talentPoolMatchStageID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setIndicationColor() setIndicationColor(string $value) Set indicationColor
 * attribute. Provides a fluent interface.
 * @method string getIndicationColor getIndicationColor() Get indicationColor
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setIsActive()
 * setIsActive(integer $value) Set isActive attribute. Provides a fluent interface.
 * @method integer getIsActive getIsActive() Get isActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setIsDefault()
 * setIsDefault(integer $value) Set isDefault attribute. Provides a fluent
 * interface.
 * @method integer getIsDefault getIsDefault() Get isDefault attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setNotes()
 * setNotes(string $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setModificationDate() setModificationDate(string $value) Set modificationDate
 * attribute. Provides a fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setPackageID()
 * setPackageID(string $value) Set packageID attribute. Provides a fluent
 * interface.
 * @method string getPackageID getPackageID() Get packageID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setPackageConfig() setPackageConfig(Carerix_Api_Rest_DataType_NSDictionary|array
 * $value) Set packageConfig attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getPackageConfig
 * getPackageConfig() Get packageConfig attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setToProcedureNode() setToProcedureNode(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toProcedureNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProcedureNode
 * getToProcedureNode($index = null) Get toProcedureNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setToTalentPoolMatchStageGroupNode()
 * setToTalentPoolMatchStageGroupNode(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toTalentPoolMatchStageGroupNode relationship. Provides a fluent
 * interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTalentPoolMatchStageGroupNode
 * getToTalentPoolMatchStageGroupNode($index = null) Get
 * toTalentPoolMatchStageGroupNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setChildrenLinks() setChildrenLinks(array|Carerix_Api_Rest_Collection $values)
 * Set childrenLinks relationship. Provides a fluent interface.
 * @method
 * Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatchStageLink
 * getChildrenLinks getChildrenLinks() Get childrenLinks relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setParentLinks()
 * setParentLinks(array|Carerix_Api_Rest_Collection $values) Set parentLinks
 * relationship. Provides a fluent interface.
 * @method
 * Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatchStageLink
 * getParentLinks getParentLinks() Get parentLinks relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setChildren()
 * setChildren(array|Carerix_Api_Rest_Collection $values) Set children
 * relationship. Provides a fluent interface.
 * @method
 * Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatchStage
 * getChildren getChildren() Get children relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setNames()
 * setNames(array|Carerix_Api_Rest_Collection $values) Set names relationship.
 * Provides a fluent interface.
 * @method
 * Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatchStageName
 * getNames getNames() Get names relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage setParents()
 * setParents(array|Carerix_Api_Rest_Collection $values) Set parents relationship.
 * Provides a fluent interface.
 * @method
 * Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatchStage
 * getParents getParents() Get parents relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setEmailTemplates() setEmailTemplates(array|Carerix_Api_Rest_Collection $values)
 * Set emailTemplates relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREmailTemplate
 * getEmailTemplates getEmailTemplates() Get emailTemplates relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage
 * setTemplateReferences() setTemplateReferences(array|Carerix_Api_Rest_Collection
 * $values) Set templateReferences relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTemplateReference
 * getTemplateReferences getTemplateReferences() Get templateReferences
 * relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStage extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRTalentPoolMatchStage';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isFinal = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $code = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $talentPoolMatchStageID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $indicationColor = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isActive = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $packageID = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $packageConfig = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProcedureNode
     */
    public $toProcedureNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTalentPoolMatchStageGroupNode
     */
    public $toTalentPoolMatchStageGroupNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStageLink")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageLink
     * @to_many 1
     * @name childrenLinks
     */
    public $childrenLinks = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStageLink")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageLink
     * @to_many 1
     * @name parentLinks
     */
    public $parentLinks = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 1
     * @name children
     */
    public $children = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStageName")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageName
     * @to_many 1
     * @name names
     */
    public $names = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 1
     * @name parents
     */
    public $parents = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 1
     * @name emailTemplates
     */
    public $emailTemplates = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 1
     * @name templateReferences
     */
    public $templateReferences = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageID");
        $entityConfiguration->setName("CRTalentPoolMatchStage");
    }


}
