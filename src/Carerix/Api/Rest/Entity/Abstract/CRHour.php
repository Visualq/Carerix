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
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setHourID() setHourID(integer
 * $value) Set hourID attribute. Provides a fluent interface.
 * @method integer getHourID getHourID() Get hourID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setDate() setDate(string $value)
 * Set date attribute. Provides a fluent interface.
 * @method string getDate getDate() Get date attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setHours() setHours(float
 * $value) Set hours attribute. Provides a fluent interface.
 * @method float getHours getHours() Get hours attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setDeleted() setDeleted(integer
 * $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setApprovedHours()
 * setApprovedHours(float $value) Set approvedHours attribute. Provides a fluent
 * interface.
 * @method float getApprovedHours getApprovedHours() Get approvedHours attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setInvoicedHours()
 * setInvoicedHours(float $value) Set invoicedHours attribute. Provides a fluent
 * interface.
 * @method float getInvoicedHours getInvoicedHours() Get invoicedHours attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setImportID() setImportID(string
 * $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRHour setToWeekHour()
 * setToWeekHour(array|Carerix_Api_Rest_Entity_CRWeekHour $value) Set toWeekHour
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRWeekHour getToWeekHour getToWeekHour($index =
 * null) Get toWeekHour relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRHour extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRHour';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $hourID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $date = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hours = null;

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
    public $deleted = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $approvedHours = null;

    /**
     * @cx_field    true
     * @access      private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoicedHours = null;

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
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRWeekHour
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRWeekHour")
     * @mandatory          0
     * @destination_entity CRWeekHour
     * @to_many            0
     * @name toWeekHour
     */
    public $toWeekHour = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("hourID");
        $entityConfiguration->setName("CRHour");
    }


}
