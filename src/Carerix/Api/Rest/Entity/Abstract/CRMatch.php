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
 * @version   Mon, 19 Nov 2018 11:55:49 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setRecruiterPreferenceKey()
 * setRecruiterPreferenceKey(integer $value) Set recruiterPreferenceKey attribute.
 * Provides a fluent interface.
 * @method integer getRecruiterPreferenceKey getRecruiterPreferenceKey() Get
 * recruiterPreferenceKey attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setProofPeriod()
 * setProofPeriod(integer $value) Set proofPeriod attribute. Provides a fluent
 * interface.
 * @method integer getProofPeriod getProofPeriod() Get proofPeriod attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setAgreedSalary()
 * setAgreedSalary(string $value) Set agreedSalary attribute. Provides a fluent
 * interface.
 * @method string getAgreedSalary getAgreedSalary() Get agreedSalary attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setJobStartDate()
 * setJobStartDate(string $value) Set jobStartDate attribute. Provides a fluent
 * interface.
 * @method string getJobStartDate getJobStartDate() Get jobStartDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setSourceInfo()
 * setSourceInfo(string $value) Set sourceInfo attribute. Provides a fluent
 * interface.
 * @method string getSourceInfo getSourceInfo() Get sourceInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setInvoiceRate()
 * setInvoiceRate(float $value) Set invoiceRate attribute. Provides a fluent
 * interface.
 * @method float getInvoiceRate getInvoiceRate() Get invoiceRate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setWageRate() setWageRate(float
 * $value) Set wageRate attribute. Provides a fluent interface.
 * @method float getWageRate getWageRate() Get wageRate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setMotivation()
 * setMotivation(string $value) Set motivation attribute. Provides a fluent
 * interface.
 * @method string getMotivation getMotivation() Get motivation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setWageRatePerHour()
 * setWageRatePerHour(integer $value) Set wageRatePerHour attribute. Provides a
 * fluent interface.
 * @method integer getWageRatePerHour getWageRatePerHour() Get wageRatePerHour
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setEvaluation()
 * setEvaluation(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * evaluation attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getEvaluation
 * getEvaluation() Get evaluation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setIsConfidential()
 * setIsConfidential(integer $value) Set isConfidential attribute. Provides a
 * fluent interface.
 * @method integer getIsConfidential getIsConfidential() Get isConfidential
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setCostPrice()
 * setCostPrice(float $value) Set costPrice attribute. Provides a fluent interface.
 * @method float getCostPrice getCostPrice() Get costPrice attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setSellingPrice()
 * setSellingPrice(float $value) Set sellingPrice attribute. Provides a fluent
 * interface.
 * @method float getSellingPrice getSellingPrice() Get sellingPrice attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setSalesFactor()
 * setSalesFactor(float $value) Set salesFactor attribute. Provides a fluent
 * interface.
 * @method float getSalesFactor getSalesFactor() Get salesFactor attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setPurchaseRate()
 * setPurchaseRate(float $value) Set purchaseRate attribute. Provides a fluent
 * interface.
 * @method float getPurchaseRate getPurchaseRate() Get purchaseRate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setDefaultSalesFactor()
 * setDefaultSalesFactor(float $value) Set defaultSalesFactor attribute. Provides a
 * fluent interface.
 * @method float getDefaultSalesFactor getDefaultSalesFactor() Get
 * defaultSalesFactor attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setExternalInfo()
 * setExternalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * externalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getExternalInfo
 * getExternalInfo() Get externalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setApplySource()
 * setApplySource(string $value) Set applySource attribute. Provides a fluent
 * interface.
 * @method string getApplySource getApplySource() Get applySource attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setApplyTags()
 * setApplyTags(Carerix_Api_Rest_DataType_NSArray|array $value) Set applyTags
 * attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSArray|array getApplyTags getApplyTags() Get
 * applyTags attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setExternalIdentifier()
 * setExternalIdentifier(string $value) Set externalIdentifier attribute. Provides
 * a fluent interface.
 * @method string getExternalIdentifier getExternalIdentifier() Get
 * externalIdentifier attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToVacancy()
 * setToVacancy(array|Carerix_Api_Rest_Entity_CRVacancy $value) Set toVacancy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRVacancy getToVacancy getToVacancy($index =
 * null) Get toVacancy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToPublication()
 * setToPublication(array|Carerix_Api_Rest_Entity_CRPublication $value) Set
 * toPublication relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRPublication getToPublication
 * getToPublication($index = null) Get toPublication relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToMedium()
 * setToMedium(array|Carerix_Api_Rest_Entity_CRMedium $value) Set toMedium
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMedium getToMedium getToMedium($index = null)
 * Get toMedium relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setStatusInfo()
 * setStatusInfo(array|Carerix_Api_Rest_Entity_CRStatusInfo $value) Set statusInfo
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRStatusInfo getStatusInfo getStatusInfo($index
 * = null) Get statusInfo relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setJobs()
 * setJobs(array|Carerix_Api_Rest_Collection $values) Set jobs relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRJob getJobs
 * getJobs() Get jobs relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToSourceNode()
 * setToSourceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSourceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSourceNode
 * getToSourceNode($index = null) Get toSourceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToWageRateCurrencyNode()
 * setToWageRateCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toWageRateCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToWageRateCurrencyNode
 * getToWageRateCurrencyNode($index = null) Get toWageRateCurrencyNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToWageRateUnitNode()
 * setToWageRateUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toWageRateUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToWageRateUnitNode
 * getToWageRateUnitNode($index = null) Get toWageRateUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToInvoiceRateCurrencyNode()
 * setToInvoiceRateCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value)
 * Set toInvoiceRateCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToInvoiceRateCurrencyNode
 * getToInvoiceRateCurrencyNode($index = null) Get toInvoiceRateCurrencyNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToInvoiceRateUnitNode()
 * setToInvoiceRateUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toInvoiceRateUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToInvoiceRateUnitNode
 * getToInvoiceRateUnitNode($index = null) Get toInvoiceRateUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToLevel2Company()
 * setToLevel2Company(array|Carerix_Api_Rest_Entity_CRCompany $value) Set
 * toLevel2Company relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToLevel2Company
 * getToLevel2Company($index = null) Get toLevel2Company relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToLevel2User()
 * setToLevel2User(array|Carerix_Api_Rest_Entity_CRUser $value) Set toLevel2User
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToLevel2User getToLevel2User($index =
 * null) Get toLevel2User relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToLevel1Company()
 * setToLevel1Company(array|Carerix_Api_Rest_Entity_CRCompany $value) Set
 * toLevel1Company relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToLevel1Company
 * getToLevel1Company($index = null) Get toLevel1Company relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToLevel1User()
 * setToLevel1User(array|Carerix_Api_Rest_Entity_CRUser $value) Set toLevel1User
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToLevel1User getToLevel1User($index =
 * null) Get toLevel1User relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setAttributeChanges()
 * setAttributeChanges(array|Carerix_Api_Rest_Collection $values) Set
 * attributeChanges relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttributeChange
 * getAttributeChanges getAttributeChanges() Get attributeChanges relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToConfidentialUserRole()
 * setToConfidentialUserRole(array|Carerix_Api_Rest_Entity_CRUserRole $value) Set
 * toConfidentialUserRole relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUserRole getToConfidentialUserRole
 * getToConfidentialUserRole($index = null) Get toConfidentialUserRole
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToCostPriceCurrencyNode()
 * setToCostPriceCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCostPriceCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCostPriceCurrencyNode
 * getToCostPriceCurrencyNode($index = null) Get toCostPriceCurrencyNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToCostPriceUnitNode()
 * setToCostPriceUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCostPriceUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCostPriceUnitNode
 * getToCostPriceUnitNode($index = null) Get toCostPriceUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToSellingPriceCurrencyNode()
 * setToSellingPriceCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value)
 * Set toSellingPriceCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSellingPriceCurrencyNode
 * getToSellingPriceCurrencyNode($index = null) Get toSellingPriceCurrencyNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToSellingPriceUnitNode()
 * setToSellingPriceUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSellingPriceUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSellingPriceUnitNode
 * getToSellingPriceUnitNode($index = null) Get toSellingPriceUnitNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setGroupNodes()
 * setGroupNodes(array|Carerix_Api_Rest_Collection $values) Set groupNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getGroupNodes getGroupNodes() Get groupNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToPreferenceNode()
 * setToPreferenceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toPreferenceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToPreferenceNode
 * getToPreferenceNode($index = null) Get toPreferenceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToPurchaseRateCurrencyNode()
 * setToPurchaseRateCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value)
 * Set toPurchaseRateCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToPurchaseRateCurrencyNode
 * getToPurchaseRateCurrencyNode($index = null) Get toPurchaseRateCurrencyNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setToPurchaseRateUnitNode()
 * setToPurchaseRateUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toPurchaseRateUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToPurchaseRateUnitNode
 * getToPurchaseRateUnitNode($index = null) Get toPurchaseRateUnitNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch
 * setToCurrentEmployeeBrancheLevel1()
 * setToCurrentEmployeeBrancheLevel1(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toCurrentEmployeeBrancheLevel1 relationship. Provides a fluent
 * interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCurrentEmployeeBrancheLevel1
 * getToCurrentEmployeeBrancheLevel1($index = null) Get
 * toCurrentEmployeeBrancheLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch
 * setToCurrentEmployeeBrancheLevel2()
 * setToCurrentEmployeeBrancheLevel2(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toCurrentEmployeeBrancheLevel2 relationship. Provides a fluent
 * interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCurrentEmployeeBrancheLevel2
 * getToCurrentEmployeeBrancheLevel2($index = null) Get
 * toCurrentEmployeeBrancheLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMatch
 * setToCurrentEmployeeFunctionLevel2()
 * setToCurrentEmployeeFunctionLevel2(array|Carerix_Api_Rest_Entity_CRDataNode
 * $value) Set toCurrentEmployeeFunctionLevel2 relationship. Provides a fluent
 * interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCurrentEmployeeFunctionLevel2
 * getToCurrentEmployeeFunctionLevel2($index = null) Get
 * toCurrentEmployeeFunctionLevel2 relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRMatch extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRMatch';

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
    public $recruiterPreferenceKey = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $proofPeriod = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $agreedSalary = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $jobStartDate = null;

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
     * @width       255
     */
    public $sourceInfo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoiceRate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wageRate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $motivation = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $wageRatePerHour = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $evaluation = null;

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
    public $isConfidential = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costPrice = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sellingPrice = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $salesFactor = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $defaultSalesFactor = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $externalInfo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $applySource = null;

    /**
     * @cx_field          true
     * @access            private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class       NSArray
     * @allows_null       1
     * @xmlSubelementName tag
     */
    public $applyTags = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $externalIdentifier = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          1
     * @destination_entity CREmployee
     * @to_many            0
     * @name toEmployee
     */
    public $toEmployee = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRVacancy
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRVacancy")
     * @mandatory          1
     * @destination_entity CRVacancy
     * @to_many            0
     * @name toVacancy
     */
    public $toVacancy = null;

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
     * @var Carerix_Api_Rest_Entity_CRPublication
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRPublication")
     * @mandatory          0
     * @destination_entity CRPublication
     * @to_many            0
     * @name toPublication
     */
    public $toPublication = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRMedium
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMedium")
     * @mandatory          0
     * @destination_entity CRMedium
     * @to_many            0
     * @name toMedium
     */
    public $toMedium = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRStatusInfo
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRStatusInfo")
     * @mandatory          0
     * @destination_entity CRStatusInfo
     * @to_many            0
     * @name statusInfo
     */
    public $statusInfo = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRJob")
     * @mandatory          0
     * @destination_entity CRJob
     * @to_many            1
     * @name jobs
     */
    public $jobs = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSourceNode
     */
    public $toSourceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toWageRateCurrencyNode
     * @default            1
     * @nodeType           Valuta
     */
    public $toWageRateCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toWageRateUnitNode
     * @default            1
     * @nodeType           Inkooptarief-eenheid
     */
    public $toWageRateUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toInvoiceRateCurrencyNode
     * @default            1
     * @nodeType           Valuta
     */
    public $toInvoiceRateCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toInvoiceRateUnitNode
     * @default            1
     * @nodeType           Verkooptarief-eenheid
     */
    public $toInvoiceRateUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            0
     * @name toLevel2Company
     */
    public $toLevel2Company = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toLevel2User
     */
    public $toLevel2User = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            0
     * @name toLevel1Company
     */
    public $toLevel1Company = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toLevel1User
     */
    public $toLevel1User = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttributeChange")
     * @mandatory          0
     * @destination_entity CRAttributeChange
     * @to_many            1
     * @name attributeChanges
     */
    public $attributeChanges = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUserRole
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUserRole")
     * @mandatory          0
     * @destination_entity CRUserRole
     * @to_many            0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCostPriceCurrencyNode
     */
    public $toCostPriceCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCostPriceUnitNode
     */
    public $toCostPriceUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSellingPriceCurrencyNode
     */
    public $toSellingPriceCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSellingPriceUnitNode
     */
    public $toSellingPriceUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toPreferenceNode
     * @default            1
     * @nodeType           Match-Favoriet
     */
    public $toPreferenceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toPurchaseRateCurrencyNode
     */
    public $toPurchaseRateCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toPurchaseRateUnitNode
     */
    public $toPurchaseRateUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttachment")
     * @mandatory          0
     * @destination_entity CRAttachment
     * @to_many            1
     * @name attachments
     */
    public $attachments = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCurrentEmployeeBrancheLevel1
     */
    public $toCurrentEmployeeBrancheLevel1 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCurrentEmployeeBrancheLevel2
     */
    public $toCurrentEmployeeBrancheLevel2 = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCurrentEmployeeFunctionLevel2
     */
    public $toCurrentEmployeeFunctionLevel2 = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("matchID");
        $entityConfiguration->setName("CRMatch");
    }


}
