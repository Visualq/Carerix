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
 * @version Mon, 19 Nov 2018 11:56:06 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setOpportunityID()
 * setOpportunityID(integer $value) Set opportunityID attribute. Provides a fluent
 * interface.
 * @method integer getOpportunityID getOpportunityID() Get opportunityID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setWorkPostalCode()
 * setWorkPostalCode(string $value) Set workPostalCode attribute. Provides a fluent
 * interface.
 * @method string getWorkPostalCode getWorkPostalCode() Get workPostalCode
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setName() setName(string
 * $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setOpportunityNo()
 * setOpportunityNo(string $value) Set opportunityNo attribute. Provides a fluent
 * interface.
 * @method string getOpportunityNo getOpportunityNo() Get opportunityNo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity
 * setSuccessRatePercentage() setSuccessRatePercentage(float $value) Set
 * successRatePercentage attribute. Provides a fluent interface.
 * @method float getSuccessRatePercentage getSuccessRatePercentage() Get
 * successRatePercentage attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setEstimatedAmount()
 * setEstimatedAmount(float $value) Set estimatedAmount attribute. Provides a
 * fluent interface.
 * @method float getEstimatedAmount getEstimatedAmount() Get estimatedAmount
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setWorkCity()
 * setWorkCity(string $value) Set workCity attribute. Provides a fluent interface.
 * @method string getWorkCity getWorkCity() Get workCity attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setNotes()
 * setNotes(string $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setSourceInfo()
 * setSourceInfo(string $value) Set sourceInfo attribute. Provides a fluent
 * interface.
 * @method string getSourceInfo getSourceInfo() Get sourceInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setCoordX()
 * setCoordX(integer $value) Set coordX attribute. Provides a fluent interface.
 * @method integer getCoordX getCoordX() Get coordX attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setCoordY()
 * setCoordY(integer $value) Set coordY attribute. Provides a fluent interface.
 * @method integer getCoordY getCoordY() Get coordY attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setFeePercentage()
 * setFeePercentage(float $value) Set feePercentage attribute. Provides a fluent
 * interface.
 * @method float getFeePercentage getFeePercentage() Get feePercentage attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setWorkLocation()
 * setWorkLocation(string $value) Set workLocation attribute. Provides a fluent
 * interface.
 * @method string getWorkLocation getWorkLocation() Get workLocation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setIsConfidential()
 * setIsConfidential(integer $value) Set isConfidential attribute. Provides a
 * fluent interface.
 * @method integer getIsConfidential getIsConfidential() Get isConfidential
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity
 * setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToUser()
 * setToUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set toUser relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToUser getToUser($index = null) Get
 * toUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToProvince1Node()
 * setToProvince1Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProvince1Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProvince1Node
 * getToProvince1Node($index = null) Get toProvince1Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToSignAuthority()
 * setToSignAuthority(array|Carerix_Api_Rest_Entity_CRUser $value) Set
 * toSignAuthority relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToSignAuthority
 * getToSignAuthority($index = null) Get toSignAuthority relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToCountry1Node()
 * setToCountry1Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCountry1Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCountry1Node
 * getToCountry1Node($index = null) Get toCountry1Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity
 * setToEstimatedAmountCurrencyNode()
 * setToEstimatedAmountCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toEstimatedAmountCurrencyNode relationship. Provides a fluent
 * interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToEstimatedAmountCurrencyNode
 * getToEstimatedAmountCurrencyNode($index = null) Get
 * toEstimatedAmountCurrencyNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToCompany()
 * setToCompany(array|Carerix_Api_Rest_Entity_CRCompany $value) Set toCompany
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToCompany getToCompany($index =
 * null) Get toCompany relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToSourceNode()
 * setToSourceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSourceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSourceNode
 * getToSourceNode($index = null) Get toSourceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setBroughtInBy()
 * setBroughtInBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set broughtInBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getBroughtInBy getBroughtInBy($index =
 * null) Get broughtInBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setAttributeChanges()
 * setAttributeChanges(array|Carerix_Api_Rest_Collection $values) Set
 * attributeChanges relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttributeChange
 * getAttributeChanges getAttributeChanges() Get attributeChanges relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToCountry2Node()
 * setToCountry2Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCountry2Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCountry2Node
 * getToCountry2Node($index = null) Get toCountry2Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToCountry3Node()
 * setToCountry3Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCountry3Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCountry3Node
 * getToCountry3Node($index = null) Get toCountry3Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToProvince2Node()
 * setToProvince2Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProvince2Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProvince2Node
 * getToProvince2Node($index = null) Get toProvince2Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToProvince3Node()
 * setToProvince3Node(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProvince3Node relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProvince3Node
 * getToProvince3Node($index = null) Get toProvince3Node relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setGroupNodes()
 * setGroupNodes(array|Carerix_Api_Rest_Collection $values) Set groupNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getGroupNodes getGroupNodes() Get groupNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToCategoryNode()
 * setToCategoryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCategoryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCategoryNode
 * getToCategoryNode($index = null) Get toCategoryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setOpportunityUsers()
 * setOpportunityUsers(array|Carerix_Api_Rest_Collection $values) Set
 * opportunityUsers relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CROpportunityUser
 * getOpportunityUsers getOpportunityUsers() Get opportunityUsers relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity
 * setToConfidentialUserRole()
 * setToConfidentialUserRole(array|Carerix_Api_Rest_Entity_CRUserRole $value) Set
 * toConfidentialUserRole relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUserRole getToConfidentialUserRole
 * getToConfidentialUserRole($index = null) Get toConfidentialUserRole
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setAgency()
 * setAgency(array|Carerix_Api_Rest_Entity_CRAgency $value) Set agency
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAgency getAgency getAgency($index = null) Get
 * agency relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToBrancheLevel1()
 * setToBrancheLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toBrancheLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToBrancheLevel1
 * getToBrancheLevel1($index = null) Get toBrancheLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToBrancheLevel2()
 * setToBrancheLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toBrancheLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToBrancheLevel2
 * getToBrancheLevel2($index = null) Get toBrancheLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToOpportunityStage()
 * setToOpportunityStage(array|Carerix_Api_Rest_Entity_CROpportunityStage $value)
 * Set toOpportunityStage relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CROpportunityStage getToOpportunityStage
 * getToOpportunityStage($index = null) Get toOpportunityStage relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToProcedureNode()
 * setToProcedureNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProcedureNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProcedureNode
 * getToProcedureNode($index = null) Get toProcedureNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setVacancies()
 * setVacancies(array|Carerix_Api_Rest_Collection $values) Set vacancies
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRVacancy
 * getVacancies getVacancies() Get vacancies relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToLead()
 * setToLead(array|Carerix_Api_Rest_Entity_CRLead $value) Set toLead relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRLead getToLead getToLead($index = null) Get
 * toLead relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CROpportunity setToPriorityNode()
 * setToPriorityNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toPriorityNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToPriorityNode
 * getToPriorityNode($index = null) Get toPriorityNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CROpportunity extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CROpportunity';

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
    public $opportunityID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $workPostalCode = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 45
     */
    public $opportunityNo = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $successRatePercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $estimatedAmount = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $workCity = null;

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
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $sourceInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordX = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordY = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $feePercentage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $workLocation = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential = null;

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
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser = null;

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
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince1Node
     */
    public $toProvince1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toSignAuthority
     */
    public $toSignAuthority = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry1Node
     */
    public $toCountry1Node = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toEstimatedAmountCurrencyNode
     */
    public $toEstimatedAmountCurrencyNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     */
    public $toSourceNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name broughtInBy
     */
    public $broughtInBy = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry2Node
     */
    public $toCountry2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry3Node
     */
    public $toCountry3Node = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince2Node
     */
    public $toProvince2Node = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince3Node
     */
    public $toProvince3Node = null;

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
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CROpportunityUser")
     * @mandatory 0
     * @destination_entity CROpportunityUser
     * @to_many 1
     * @name opportunityUsers
     */
    public $opportunityUsers = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUserRole
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRAgency
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name agency
     */
    public $agency = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     */
    public $toBrancheLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel2
     */
    public $toBrancheLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CROpportunityStage
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CROpportunityStage")
     * @mandatory 0
     * @destination_entity CROpportunityStage
     * @to_many 0
     * @name toOpportunityStage
     */
    public $toOpportunityStage = null;

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
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 1
     * @name vacancies
     */
    public $vacancies = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRLead
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRLead")
     * @mandatory 0
     * @destination_entity CRLead
     * @to_many 0
     * @name toLead
     */
    public $toLead = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPriorityNode
     */
    public $toPriorityNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("opportunityID");
        $entityConfiguration->setName("CROpportunity");
    }


}
