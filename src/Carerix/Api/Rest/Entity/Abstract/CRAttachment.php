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
 * @version Mon, 19 Nov 2018 11:55:40 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setAttachmentID()
 * setAttachmentID(integer $value) Set attachmentID attribute. Provides a fluent
 * interface.
 * @method integer getAttachmentID getAttachmentID() Get attachmentID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setLabel() setLabel(string
 * $value) Set label attribute. Provides a fluent interface.
 * @method string getLabel getLabel() Get label attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setValid()
 * setValid(integer $value) Set valid attribute. Provides a fluent interface.
 * @method integer getValid getValid() Get valid attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setFilePath()
 * setFilePath(string $value) Set filePath attribute. Provides a fluent interface.
 * @method string getFilePath getFilePath() Get filePath attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setRanking()
 * setRanking(integer $value) Set ranking attribute. Provides a fluent interface.
 * @method integer getRanking getRanking() Get ranking attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setContentID()
 * setContentID(string $value) Set contentID attribute. Provides a fluent
 * interface.
 * @method string getContentID getContentID() Get contentID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setMetaData()
 * setMetaData(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set metaData
 * attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getMetaData getMetaData()
 * Get metaData attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setSize() setSize(integer
 * $value) Set size attribute. Provides a fluent interface.
 * @method integer getSize getSize() Get size attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setToTypeNode()
 * setToTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toTypeNode
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTypeNode getToTypeNode($index =
 * null) Get toTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setToAttachmentData()
 * setToAttachmentData(array|Carerix_Api_Rest_Entity_CRAttachmentData $value) Set
 * toAttachmentData relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAttachmentData getToAttachmentData
 * getToAttachmentData($index = null) Get toAttachmentData relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRAttachment setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRAttachment extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRAttachment';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $attachmentID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $label = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $valid = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width
     */
    public $filePath = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

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
     * @value_type d
     * @value_type_human
     */
    public $ranking = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $contentID = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $metaData = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $size = null;

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTypeNode
     * @default
     * @nodeType Document-type
     */
    public $toTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRAttachmentData
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAttachmentData")
     * @mandatory 0
     * @destination_entity CRAttachmentData
     * @to_many 0
     * @name toAttachmentData
     */
    public $toAttachmentData = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     */
    public $toStatusNode = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("attachmentID");
        $entityConfiguration->setName("CRAttachment");
    }


}
