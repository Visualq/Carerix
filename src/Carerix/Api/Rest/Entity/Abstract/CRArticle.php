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
 * @version   Mon, 19 Nov 2018 11:55:39 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setArticleID()
 * setArticleID(integer $value) Set articleID attribute. Provides a fluent
 * interface.
 * @method integer getArticleID getArticleID() Get articleID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setContent()
 * setContent(string $value) Set content attribute. Provides a fluent interface.
 * @method string getContent getContent() Get content attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setTitle() setTitle(string
 * $value) Set title attribute. Provides a fluent interface.
 * @method string getTitle getTitle() Get title attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setSubTitle()
 * setSubTitle(string $value) Set subTitle attribute. Provides a fluent interface.
 * @method string getSubTitle getSubTitle() Get subTitle attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setIsVisible()
 * setIsVisible(integer $value) Set isVisible attribute. Provides a fluent
 * interface.
 * @method integer getIsVisible getIsVisible() Get isVisible attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setEditionArticles()
 * setEditionArticles(array|Carerix_Api_Rest_Collection $values) Set
 * editionArticles relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREditionArticle
 * getEditionArticles getEditionArticles() Get editionArticles relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRArticle setToLanguageNode()
 * setToLanguageNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageNode
 * getToLanguageNode($index = null) Get toLanguageNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRArticle extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRArticle';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $articleID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $content = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $title = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $subTitle = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isVisible = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name createdBy
     */
    public $createdBy = null;

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

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name owner
     */
    public $owner = null;

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
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREditionArticle")
     * @mandatory          0
     * @destination_entity CREditionArticle
     * @to_many            1
     * @name editionArticles
     */
    public $editionArticles = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguageNode
     * @default
     * @nodeType           Taal
     */
    public $toLanguageNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("articleID");
        $entityConfiguration->setName("CRArticle");
    }


}
