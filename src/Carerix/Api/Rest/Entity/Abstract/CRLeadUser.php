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
 * @version   Mon, 19 Nov 2018 11:56:05 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setToUser()
 * setToUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set toUser relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToUser getToUser($index = null) Get
 * toUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setToLead()
 * setToLead(array|Carerix_Api_Rest_Entity_CRLead $value) Set toLead relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRLead getToLead getToLead($index = null) Get
 * toLead relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRLeadUser setToLeadRoleNode()
 * setToLeadRoleNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLeadRoleNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLeadRoleNode
 * getToLeadRoleNode($index = null) Get toLeadRoleNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRLeadUser extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRLeadUser';

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toUser
     */
    public $toUser = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRLead
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRLead")
     * @mandatory          0
     * @destination_entity CRLead
     * @to_many            0
     * @name toLead
     */
    public $toLead = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLeadRoleNode
     */
    public $toLeadRoleNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("leadUserID");
        $entityConfiguration->setName("CRLeadUser");
    }
}
