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
 * @version Mon, 19 Nov 2018 11:56:03 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStageEmailTemplate
 * setImportID() setImportID(string $value) Set importID attribute. Provides a
 * fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStageEmailTemplate
 * setToEmailTemplate()
 * setToEmailTemplate(array|Carerix_Api_Rest_Entity_CREmailTemplate $value) Set
 * toEmailTemplate relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmailTemplate getToEmailTemplate
 * getToEmailTemplate($index = null) Get toEmailTemplate relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStageEmailTemplate
 * setToTalentPoolMatchStage()
 * setToTalentPoolMatchStage(array|Carerix_Api_Rest_Entity_CRTalentPoolMatchStage
 * $value) Set toTalentPoolMatchStage relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRTalentPoolMatchStage getToTalentPoolMatchStage
 * getToTalentPoolMatchStage($index = null) Get toTalentPoolMatchStage
 * relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRTalentPoolMatchStageEmailTemplate extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRTalentPoolMatchStageEmailTemplate';

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
     * @var Carerix_Api_Rest_Entity_CREmailTemplate
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmailTemplate")
     * @mandatory 1
     * @destination_entity CREmailTemplate
     * @to_many 0
     * @name toEmailTemplate
     */
    public $toEmailTemplate = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRTalentPoolMatchStage
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolMatchStage")
     * @mandatory 1
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 0
     * @name toTalentPoolMatchStage
     */
    public $toTalentPoolMatchStage = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageEmailTemplateID");
        $entityConfiguration->setName("CRTalentPoolMatchStageEmailTemplate");
    }


}
