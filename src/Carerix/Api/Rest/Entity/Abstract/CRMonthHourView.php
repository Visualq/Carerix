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
 * @version   Mon, 19 Nov 2018 11:56:08 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setEmployeeID()
 * setEmployeeID(integer $value) Set employeeID attribute. Provides a fluent
 * interface.
 * @method integer getEmployeeID getEmployeeID() Get employeeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setMonthString()
 * setMonthString(string $value) Set monthString attribute. Provides a fluent
 * interface.
 * @method string getMonthString getMonthString() Get monthString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRMonthHourView
 * setWeekhoursWithMonthString()
 * setWeekhoursWithMonthString(array|Carerix_Api_Rest_Collection $values) Set
 * weekhoursWithMonthString relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRWeekHour
 * getWeekhoursWithMonthString getWeekhoursWithMonthString() Get
 * weekhoursWithMonthString relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRMonthHourView extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRMonthHourView';

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
     * @allows_null 0
     */
    public $modificationDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $employeeID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width       8
     */
    public $monthString = null;

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
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRWeekHour")
     * @mandatory          0
     * @destination_entity CRWeekHour
     * @to_many            1
     * @name weekhoursWithMonthString
     */
    public $weekhoursWithMonthString = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("monthHourViewID");
        $entityConfiguration->setName("CRMonthHourView");
    }
}
