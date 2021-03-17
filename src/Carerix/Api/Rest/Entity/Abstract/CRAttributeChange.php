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
 * @version   Mon, 19 Nov 2018 11:55:40 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange
 * setAttributeEntityName() setAttributeEntityName(string $value) Set
 * attributeEntityName attribute. Provides a fluent interface.
 * @method string getAttributeEntityName getAttributeEntityName() Get
 * attributeEntityName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setId1()
 * setId1(integer $value) Set id1 attribute. Provides a fluent interface.
 * @method integer getId1 getId1() Get id1 attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setId2()
 * setId2(integer $value) Set id2 attribute. Provides a fluent interface.
 * @method integer getId2 getId2() Get id2 attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setEffectiveDate()
 * setEffectiveDate(string $value) Set effectiveDate attribute. Provides a fluent
 * interface.
 * @method string getEffectiveDate getEffectiveDate() Get effectiveDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setValue()
 * setValue(string $value) Set value attribute. Provides a fluent interface.
 * @method string getValue getValue() Get value attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setAttributeName()
 * setAttributeName(string $value) Set attributeName attribute. Provides a fluent
 * interface.
 * @method string getAttributeName getAttributeName() Get attributeName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange
 * setAttributeChangeID() setAttributeChangeID(integer $value) Set
 * attributeChangeID attribute. Provides a fluent interface.
 * @method integer getAttributeChangeID getAttributeChangeID() Get
 * attributeChangeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setEffectiveEndDate()
 * setEffectiveEndDate(string $value) Set effectiveEndDate attribute. Provides a
 * fluent interface.
 * @method string getEffectiveEndDate getEffectiveEndDate() Get effectiveEndDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setOldValue()
 * setOldValue(string $value) Set oldValue attribute. Provides a fluent interface.
 * @method string getOldValue getOldValue() Get oldValue attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setRemoteAddress()
 * setRemoteAddress(string $value) Set remoteAddress attribute. Provides a fluent
 * interface.
 * @method string getRemoteAddress getRemoteAddress() Get remoteAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttributeChange setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRAttributeChange extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRAttributeChange';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width       31
     */
    public $attributeEntityName = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $id1 = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $id2 = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $effectiveDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $value = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       31
     */
    public $attributeName = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $attributeChangeID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $effectiveEndDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $oldValue = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $remoteAddress = null;

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

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("attributeChangeID");
        $entityConfiguration->setName("CRAttributeChange");
    }
}
