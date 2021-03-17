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
 * @version   Mon, 19 Nov 2018 11:55:47 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setInfo() setInfo(string
 * $value) Set info attribute. Provides a fluent interface.
 * @method string getInfo getInfo() Get info attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setFinanceID()
 * setFinanceID(integer $value) Set financeID attribute. Provides a fluent
 * interface.
 * @method integer getFinanceID getFinanceID() Get financeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setAmount() setAmount(float
 * $value) Set amount attribute. Provides a fluent interface.
 * @method float getAmount getAmount() Get amount attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setTariff() setTariff(float
 * $value) Set tariff attribute. Provides a fluent interface.
 * @method float getTariff getTariff() Get tariff attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setNoInvoice()
 * setNoInvoice(integer $value) Set noInvoice attribute. Provides a fluent
 * interface.
 * @method integer getNoInvoice getNoInvoice() Get noInvoice attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setPurchaseRate()
 * setPurchaseRate(float $value) Set purchaseRate attribute. Provides a fluent
 * interface.
 * @method float getPurchaseRate getPurchaseRate() Get purchaseRate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToTypeNode()
 * setToTypeNode(array|Carerix_Api_Rest_Entity_CRNodeType $value) Set toTypeNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRNodeType getToTypeNode getToTypeNode($index =
 * null) Get toTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToKindNode()
 * setToKindNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toKindNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToKindNode getToKindNode($index =
 * null) Get toKindNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToCurrencyNode()
 * setToCurrencyNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCurrencyNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCurrencyNode
 * getToCurrencyNode($index = null) Get toCurrencyNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToUnitNode()
 * setToUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toUnitNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToUnitNode getToUnitNode($index =
 * null) Get toUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setToResource()
 * setToResource(array|Carerix_Api_Rest_Entity_CRResource $value) Set toResource
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRResource getToResource getToResource($index =
 * null) Get toResource relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRFinance setInvoiceLines()
 * setInvoiceLines(array|Carerix_Api_Rest_Collection $values) Set invoiceLines
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRInvoiceLine
 * getInvoiceLines getInvoiceLines() Get invoiceLines relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRFinance extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRFinance';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

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
     * @width       100
     */
    public $info = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $financeID = null;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $amount = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tariff = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $noInvoice = null;

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
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRNodeType
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRNodeType")
     * @mandatory          0
     * @destination_entity CRNodeType
     * @to_many            0
     * @name toTypeNode
     */
    public $toTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
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
     * @name toKindNode
     * @default
     * @nodeType           ${toTypeNode.name}
     */
    public $toKindNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCurrencyNode
     * @default
     * @nodeType           Valuta
     */
    public $toCurrencyNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toUnitNode
     * @default
     * @nodeType           ${toTypeNode.name}-eenheid
     */
    public $toUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRResource
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRResource")
     * @mandatory          0
     * @destination_entity CRResource
     * @to_many            0
     * @name toResource
     */
    public $toResource = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRInvoiceLine")
     * @mandatory          0
     * @destination_entity CRInvoiceLine
     * @to_many            1
     * @name invoiceLines
     */
    public $invoiceLines = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("financeID");
        $entityConfiguration->setName("CRFinance");
    }


}
