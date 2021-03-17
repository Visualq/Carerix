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
 * @version   Mon, 19 Nov 2018 11:56:00 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setHoursTotal()
 * setHoursTotal(float $value) Set hoursTotal attribute. Provides a fluent
 * interface.
 * @method float getHoursTotal getHoursTotal() Get hoursTotal attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setEmployeeID()
 * setEmployeeID(integer $value) Set employeeID attribute. Provides a fluent
 * interface.
 * @method integer getEmployeeID getEmployeeID() Get employeeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setDateString()
 * setDateString(string $value) Set dateString attribute. Provides a fluent
 * interface.
 * @method string getDateString getDateString() Get dateString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setIsEmpty()
 * setIsEmpty(integer $value) Set isEmpty attribute. Provides a fluent interface.
 * @method integer getIsEmpty getIsEmpty() Get isEmpty attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setAllWeekHours()
 * setAllWeekHours(array|Carerix_Api_Rest_Collection $values) Set allWeekHours
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRWeekHour
 * getAllWeekHours getAllWeekHours() Get allWeekHours relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setWeekHourJobViews()
 * setWeekHourJobViews(array|Carerix_Api_Rest_Collection $values) Set
 * weekHourJobViews relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRWeekHourJobView
 * getWeekHourJobViews getWeekHourJobViews() Get weekHourJobViews relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWeekHourView setComments()
 * setComments(array|Carerix_Api_Rest_Collection $values) Set comments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRWeekHourComment
 * getComments getComments() Get comments relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRWeekHourView extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRWeekHourView';

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hoursTotal = null;

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
    public $dateString = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isEmpty = null;

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
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRWeekHour")
     * @mandatory          0
     * @destination_entity CRWeekHour
     * @to_many            1
     * @name allWeekHours
     * @inverseName        toWeekHourView
     */
    public $allWeekHours = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourJobView")
     * @mandatory          0
     * @destination_entity CRWeekHourJobView
     * @to_many            1
     * @name weekHourJobViews
     */
    public $weekHourJobViews = null;

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
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourComment")
     * @mandatory          0
     * @destination_entity CRWeekHourComment
     * @to_many            1
     * @name comments
     */
    public $comments = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("weekHourViewID");
        $entityConfiguration->setName("CRWeekHourView");
    }
}
