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
 * @version Mon, 19 Nov 2018 11:55:43 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREditionArticle setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREditionArticle setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREditionArticle setCode()
 * setCode(string $value) Set code attribute. Provides a fluent interface.
 * @method string getCode getCode() Get code attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREditionArticle setToArticle()
 * setToArticle(array|Carerix_Api_Rest_Entity_CRArticle $value) Set toArticle
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRArticle getToArticle getToArticle($index =
 * null) Get toArticle relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREditionArticle setToEdition()
 * setToEdition(array|Carerix_Api_Rest_Entity_CRToDo $value) Set toEdition
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRToDo getToEdition getToEdition($index = null)
 * Get toEdition relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREditionArticle extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREditionArticle';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $code = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRArticle
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRArticle")
     * @mandatory 0
     * @destination_entity CRArticle
     * @to_many 0
     * @name toArticle
     */
    public $toArticle = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRToDo
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRToDo")
     * @mandatory 1
     * @destination_entity CRToDo
     * @to_many 0
     * @name toEdition
     */
    public $toEdition = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("editionArticleID");
        $entityConfiguration->setName("CREditionArticle");
    }


}
