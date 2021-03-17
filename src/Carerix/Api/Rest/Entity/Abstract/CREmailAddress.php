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
 * @version   Mon, 19 Nov 2018 11:55:43 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setEmailAddress()
 * setEmailAddress(string $value) Set emailAddress attribute. Provides a fluent
 * interface.
 * @method string getEmailAddress getEmailAddress() Get emailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setEmailAddressID()
 * setEmailAddressID(integer $value) Set emailAddressID attribute. Provides a
 * fluent interface.
 * @method integer getEmailAddressID getEmailAddressID() Get emailAddressID
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setInvalid()
 * setInvalid(integer $value) Set invalid attribute. Provides a fluent interface.
 * @method integer getInvalid getInvalid() Get invalid attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setIsPrimary()
 * setIsPrimary(integer $value) Set isPrimary attribute. Provides a fluent
 * interface.
 * @method integer getIsPrimary getIsPrimary() Get isPrimary attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setToUser()
 * setToUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set toUser relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToUser getToUser($index = null) Get
 * toUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmailAddress setToEmailAddressLabel()
 * setToEmailAddressLabel(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toEmailAddressLabel relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToEmailAddressLabel
 * getToEmailAddressLabel($index = null) Get toEmailAddressLabel relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmailAddress extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmailAddress';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $emailAddressID = null;

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
    public $invalid = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isPrimary = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toUser
     * @inverseName        emailAddresses
     */
    public $toUser = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toEmailAddressLabel
     * @default
     * @nodeType           E-mailadres-label
     */
    public $toEmailAddressLabel = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("emailAddressID");
        $entityConfiguration->setName("CREmailAddress");
    }
}
