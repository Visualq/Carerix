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
 * @version Mon, 19 Nov 2018 11:56:02 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolGroup setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolGroup setToGroupNode()
 * setToGroupNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toGroupNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToGroupNode getToGroupNode($index
 * = null) Get toGroupNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolGroup setToTalentPool()
 * setToTalentPool(array|Carerix_Api_Rest_Entity_CRTalentPool $value) Set
 * toTalentPool relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRTalentPool getToTalentPool
 * getToTalentPool($index = null) Get toTalentPool relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRTalentPoolGroup extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRTalentPoolGroup';

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 1
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toGroupNode
     */
    public $toGroupNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRTalentPool
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRTalentPool")
     * @mandatory 1
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     */
    public $toTalentPool = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolGroupID");
        $entityConfiguration->setName("CRTalentPoolGroup");
    }


}
