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
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setResourceID()
 * setResourceID(integer $value) Set resourceID attribute. Provides a fluent
 * interface.
 * @method integer getResourceID getResourceID() Get resourceID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setName() setName(string
 * $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setLocation()
 * setLocation(string $value) Set location attribute. Provides a fluent interface.
 * @method string getLocation getLocation() Get location attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setResourceDescription()
 * setResourceDescription(string $value) Set resourceDescription attribute.
 * Provides a fluent interface.
 * @method string getResourceDescription getResourceDescription() Get
 * resourceDescription attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setLocationUrl()
 * setLocationUrl(string $value) Set locationUrl attribute. Provides a fluent
 * interface.
 * @method string getLocationUrl getLocationUrl() Get locationUrl attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setUrl() setUrl(string
 * $value) Set url attribute. Provides a fluent interface.
 * @method string getUrl getUrl() Get url attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setIsActive()
 * setIsActive(integer $value) Set isActive attribute. Provides a fluent interface.
 * @method integer getIsActive getIsActive() Get isActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setIdentification()
 * setIdentification(string $value) Set identification attribute. Provides a fluent
 * interface.
 * @method string getIdentification getIdentification() Get identification
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setAmount() setAmount(float
 * $value) Set amount attribute. Provides a fluent interface.
 * @method float getAmount getAmount() Get amount attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setToResourceTypeNode()
 * setToResourceTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toResourceTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToResourceTypeNode
 * getToResourceTypeNode($index = null) Get toResourceTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setToRegulationTypeNode()
 * setToRegulationTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toRegulationTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToRegulationTypeNode
 * getToRegulationTypeNode($index = null) Get toRegulationTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setToAmountCurrencyNode()
 * setToAmountCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toAmountCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToAmountCurrencyNode
 * getToAmountCurrencyNode($index = null) Get toAmountCurrencyNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setAgency()
 * setAgency(array|Carerix_Api_Rest_Entity_CRAgency $value) Set agency
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAgency getAgency getAgency($index = null) Get
 * agency relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRResource setToDoResources()
 * setToDoResources(array|Carerix_Api_Rest_Collection $values) Set toDoResources
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRToDoResource
 * getToDoResources getToDoResources() Get toDoResources relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRResource extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRResource';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $resourceID = null;

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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       100
     */
    public $name = null;

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
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $location = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $resourceDescription = null;

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
     * @width       1000
     */
    public $locationUrl = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $url = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $identification = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $amount = null;

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toResourceTypeNode
     * @default
     * @nodeType           Faciliteit-type
     */
    public $toResourceTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toRegulationTypeNode
     * @default
     * @nodeType           Regeling-type
     */
    public $toRegulationTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAmountCurrencyNode
     */
    public $toAmountCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRAgency
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAgency")
     * @mandatory          0
     * @destination_entity CRAgency
     * @to_many            0
     * @name agency
     */
    public $agency = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRToDoResource")
     * @mandatory          0
     * @destination_entity CRToDoResource
     * @to_many            1
     * @name toDoResources
     */
    public $toDoResources = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("resourceID");
        $entityConfiguration->setName("CRResource");
    }


}
