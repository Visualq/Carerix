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
 * @version Mon, 19 Nov 2018 11:56:01 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setTalentPoolID()
 * setTalentPoolID(integer $value) Set talentPoolID attribute. Provides a fluent
 * interface.
 * @method integer getTalentPoolID getTalentPoolID() Get talentPoolID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setName() setName(string
 * $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToProductNode()
 * setToProductNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductNode
 * getToProductNode($index = null) Get toProductNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToProductTypeNode()
 * setToProductTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductTypeNode
 * getToProductTypeNode($index = null) Get toProductTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToCategoryNode()
 * setToCategoryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCategoryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCategoryNode
 * getToCategoryNode($index = null) Get toCategoryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToFunctionLevel1()
 * setToFunctionLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionLevel1
 * getToFunctionLevel1($index = null) Get toFunctionLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToFunctionLevel2()
 * setToFunctionLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionLevel2
 * getToFunctionLevel2($index = null) Get toFunctionLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setToFunctionLevel3()
 * setToFunctionLevel3(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionLevel3 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionLevel3
 * getToFunctionLevel3($index = null) Get toFunctionLevel3 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setGroupNodes()
 * setGroupNodes(array|Carerix_Api_Rest_Collection $values) Set groupNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getGroupNodes getGroupNodes() Get groupNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setTalentPoolMatches()
 * setTalentPoolMatches(array|Carerix_Api_Rest_Collection $values) Set
 * talentPoolMatches relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolMatch
 * getTalentPoolMatches getTalentPoolMatches() Get talentPoolMatches relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setTalentPoolUsers()
 * setTalentPoolUsers(array|Carerix_Api_Rest_Collection $values) Set
 * talentPoolUsers relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolUser
 * getTalentPoolUsers getTalentPoolUsers() Get talentPoolUsers relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPool setTalentPoolCompanies()
 * setTalentPoolCompanies(array|Carerix_Api_Rest_Collection $values) Set
 * talentPoolCompanies relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolCompany
 * getTalentPoolCompanies getTalentPoolCompanies() Get talentPoolCompanies
 * relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRTalentPool extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRTalentPool';

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
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $talentPoolID = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $name = null;

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
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial = null;

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
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy = null;

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     */
    public $toStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductNode
     */
    public $toProductNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode
     */
    public $toProductTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCategoryNode
     */
    public $toCategoryNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel1
     */
    public $toFunctionLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel2
     */
    public $toFunctionLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel3
     */
    public $toFunctionLevel3 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
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
     * @name createdBy
     */
    public $createdBy = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatch")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatch
     * @to_many 1
     * @name talentPoolMatches
     */
    public $talentPoolMatches = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolUser")
     * @mandatory 0
     * @destination_entity CRTalentPoolUser
     * @to_many 1
     * @name talentPoolUsers
     */
    public $talentPoolUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolCompany")
     * @mandatory 0
     * @destination_entity CRTalentPoolCompany
     * @to_many 1
     * @name talentPoolCompanies
     */
    public $talentPoolCompanies = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolID");
        $entityConfiguration->setName("CRTalentPool");
    }


}
