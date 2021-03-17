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
 * @version Mon, 19 Nov 2018 11:55:59 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setWeekHourID()
 * setWeekHourID(integer $value) Set weekHourID attribute. Provides a fluent
 * interface.
 * @method integer getWeekHourID getWeekHourID() Get weekHourID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setInfo() setInfo(string
 * $value) Set info attribute. Provides a fluent interface.
 * @method string getInfo getInfo() Get info attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setIsPlanning()
 * setIsPlanning(integer $value) Set isPlanning attribute. Provides a fluent
 * interface.
 * @method integer getIsPlanning getIsPlanning() Get isPlanning attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setApprovedTotal()
 * setApprovedTotal(float $value) Set approvedTotal attribute. Provides a fluent
 * interface.
 * @method float getApprovedTotal getApprovedTotal() Get approvedTotal attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setInvoicedTotal()
 * setInvoicedTotal(float $value) Set invoicedTotal attribute. Provides a fluent
 * interface.
 * @method float getInvoicedTotal getInvoicedTotal() Get invoicedTotal attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setDateString()
 * setDateString(string $value) Set dateString attribute. Provides a fluent
 * interface.
 * @method string getDateString getDateString() Get dateString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setIsJobPending()
 * setIsJobPending(integer $value) Set isJobPending attribute. Provides a fluent
 * interface.
 * @method integer getIsJobPending getIsJobPending() Get isJobPending attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setIsJobPendingValue()
 * setIsJobPendingValue(integer $value) Set isJobPendingValue attribute. Provides a
 * fluent interface.
 * @method integer getIsJobPendingValue getIsJobPendingValue() Get
 * isJobPendingValue attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setMonthString()
 * setMonthString(string $value) Set monthString attribute. Provides a fluent
 * interface.
 * @method string getMonthString getMonthString() Get monthString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setHoursUnsorted()
 * setHoursUnsorted(array|Carerix_Api_Rest_Collection $values) Set hoursUnsorted
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRHour
 * getHoursUnsorted getHoursUnsorted() Get hoursUnsorted relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToHourTypeNode()
 * setToHourTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toHourTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToHourTypeNode
 * getToHourTypeNode($index = null) Get toHourTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToJob()
 * setToJob(array|Carerix_Api_Rest_Entity_CRJob $value) Set toJob relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRJob getToJob getToJob($index = null) Get toJob
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToWeekHourView()
 * setToWeekHourView(array|Carerix_Api_Rest_Entity_CRWeekHourView $value) Set
 * toWeekHourView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRWeekHourView getToWeekHourView
 * getToWeekHourView($index = null) Get toWeekHourView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToWeekHourJobView()
 * setToWeekHourJobView(array|Carerix_Api_Rest_Entity_CRWeekHourJobView $value) Set
 * toWeekHourJobView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRWeekHourJobView getToWeekHourJobView
 * getToWeekHourJobView($index = null) Get toWeekHourJobView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setInvoiceLines()
 * setInvoiceLines(array|Carerix_Api_Rest_Collection $values) Set invoiceLines
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRInvoiceLine
 * getInvoiceLines getInvoiceLines() Get invoiceLines relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToMonthHourView()
 * setToMonthHourView(array|Carerix_Api_Rest_Entity_CRMonthHourView $value) Set
 * toMonthHourView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMonthHourView getToMonthHourView
 * getToMonthHourView($index = null) Get toMonthHourView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setToMonthHourJobView()
 * setToMonthHourJobView(array|Carerix_Api_Rest_Entity_CRMonthHourJobView $value)
 * Set toMonthHourJobView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMonthHourJobView getToMonthHourJobView
 * getToMonthHourJobView($index = null) Get toMonthHourJobView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHour setAttributeChanges()
 * setAttributeChanges(array|Carerix_Api_Rest_Collection $values) Set
 * attributeChanges relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttributeChange
 * getAttributeChanges getAttributeChanges() Get attributeChanges relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRWeekHour extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRWeekHour';

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
    public $deleted = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $weekHourID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $info = null;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isPlanning = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $approvedTotal = null;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoicedTotal = null;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 8
     */
    public $dateString = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isJobPending = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isJobPendingValue = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 6
     */
    public $monthString = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRHour")
     * @mandatory 0
     * @destination_entity CRHour
     * @to_many 1
     * @name hoursUnsorted
     */
    public $hoursUnsorted = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHourTypeNode
     * @default
     * @nodeType Declaratiesoort
     */
    public $toHourTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRJob
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 0
     * @name toJob
     */
    public $toJob = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default
     * @nodeType Weekstaat-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRWeekHourView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 0
     * @name toWeekHourView
     * @inverseName allWeekHours
     */
    public $toWeekHourView = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRWeekHourJobView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 0
     * @name toWeekHourJobView
     * @inverseName allWeekHours
     */
    public $toWeekHourJobView = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 1
     * @name invoiceLines
     */
    public $invoiceLines = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRMonthHourView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 0
     * @name toMonthHourView
     */
    public $toMonthHourView = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRMonthHourJobView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMonthHourJobView")
     * @mandatory 0
     * @destination_entity CRMonthHourJobView
     * @to_many 0
     * @name toMonthHourJobView
     */
    public $toMonthHourJobView = null;

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

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("weekHourID");
        $entityConfiguration->setName("CRWeekHour");
    }


}
