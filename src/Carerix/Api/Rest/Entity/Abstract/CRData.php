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
 * @version Mon, 19 Nov 2018 11:55:42 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setDataID() setDataID(integer
 * $value) Set dataID attribute. Provides a fluent interface.
 * @method integer getDataID getDataID() Get dataID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setEntry() setEntry(string
 * $value) Set entry attribute. Provides a fluent interface.
 * @method string getEntry getEntry() Get entry attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setInfo() setInfo(string $value)
 * Set info attribute. Provides a fluent interface.
 * @method string getInfo getInfo() Get info attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setSection() setSection(string
 * $value) Set section attribute. Provides a fluent interface.
 * @method string getSection getSection() Get section attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setDomain() setDomain(string
 * $value) Set domain attribute. Provides a fluent interface.
 * @method string getDomain getDomain() Get domain attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setDeleted() setDeleted(integer
 * $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setIsEditable()
 * setIsEditable(integer $value) Set isEditable attribute. Provides a fluent
 * interface.
 * @method integer getIsEditable getIsEditable() Get isEditable attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setIsVisible()
 * setIsVisible(integer $value) Set isVisible attribute. Provides a fluent
 * interface.
 * @method integer getIsVisible getIsVisible() Get isVisible attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setDefaultValue()
 * setDefaultValue(string $value) Set defaultValue attribute. Provides a fluent
 * interface.
 * @method string getDefaultValue getDefaultValue() Get defaultValue attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setSortOrder()
 * setSortOrder(integer $value) Set sortOrder attribute. Provides a fluent
 * interface.
 * @method integer getSortOrder getSortOrder() Get sortOrder attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRData setSettingConfig()
 * setSettingConfig(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * settingConfig attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getSettingConfig
 * getSettingConfig() Get settingConfig attribute.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRData extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRData';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $dataID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $entry = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $info = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $section = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $domain = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isEditable = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isVisible = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $defaultValue = null;

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
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $settingConfig = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("dataID");
        $entityConfiguration->setName("CRData");
    }


}
