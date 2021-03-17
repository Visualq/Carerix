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
 * @version   Mon, 19 Nov 2018 11:55:42 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setDataNodeID()
 * setDataNodeID(integer $value) Set dataNodeID attribute. Provides a fluent
 * interface.
 * @method integer getDataNodeID getDataNodeID() Get dataNodeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setNotActive()
 * setNotActive(integer $value) Set notActive attribute. Provides a fluent
 * interface.
 * @method integer getNotActive getNotActive() Get notActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setIsHidden()
 * setIsHidden(integer $value) Set isHidden attribute. Provides a fluent interface.
 * @method integer getIsHidden getIsHidden() Get isHidden attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setIsDefault()
 * setIsDefault(integer $value) Set isDefault attribute. Provides a fluent
 * interface.
 * @method integer getIsDefault getIsDefault() Get isDefault attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setExportCode()
 * setExportCode(string $value) Set exportCode attribute. Provides a fluent
 * interface.
 * @method string getExportCode getExportCode() Get exportCode attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setIsSystem()
 * setIsSystem(integer $value) Set isSystem attribute. Provides a fluent interface.
 * @method integer getIsSystem getIsSystem() Get isSystem attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setListType()
 * setListType(string $value) Set listType attribute. Provides a fluent interface.
 * @method string getListType getListType() Get listType attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setPackageID()
 * setPackageID(string $value) Set packageID attribute. Provides a fluent
 * interface.
 * @method string getPackageID getPackageID() Get packageID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setPackageConfig()
 * setPackageConfig(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * packageConfig attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getPackageConfig
 * getPackageConfig() Get packageConfig attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setType()
 * setType(array|Carerix_Api_Rest_Entity_CRNodeType $value) Set type relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRNodeType getType getType($index = null) Get
 * type relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setChildrenNodes()
 * setChildrenNodes(array|Carerix_Api_Rest_Collection $values) Set childrenNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getChildrenNodes getChildrenNodes() Get childrenNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setParentNodes()
 * setParentNodes(array|Carerix_Api_Rest_Collection $values) Set parentNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getParentNodes getParentNodes() Get parentNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRDataNode setValues()
 * setValues(array|Carerix_Api_Rest_Collection $values) Set values relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNodeValue
 * getValues getValues() Get values relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRDataNode extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRDataNode';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $dataNodeID = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $notActive = null;

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
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isHidden = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $notes = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     * @isUnique    1
     */
    public $exportCode = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isSystem = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $listType = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $packageID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $packageConfig = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRNodeType
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRNodeType")
     * @mandatory          1
     * @destination_entity CRNodeType
     * @to_many            0
     * @name type
     */
    public $type = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name childrenNodes
     */
    public $childrenNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name parentNodes
     */
    public $parentNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNodeValue")
     * @mandatory          0
     * @destination_entity CRDataNodeValue
     * @to_many            1
     * @name values
     * @inverseName        toDataNode
     */
    public $values = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("dataNodeID");
        $entityConfiguration->setName("CRDataNode");
    }


}
