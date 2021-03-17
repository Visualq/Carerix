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
 * @version Mon, 19 Nov 2018 11:55:50 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setTypeID()
 * setTypeID(integer $value) Set typeID attribute. Provides a fluent interface.
 * @method integer getTypeID getTypeID() Get typeID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setName() setName(string
 * $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setIsEnumerated()
 * setIsEnumerated(integer $value) Set isEnumerated attribute. Provides a fluent
 * interface.
 * @method integer getIsEnumerated getIsEnumerated() Get isEnumerated attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setCurrentEnumerationID()
 * setCurrentEnumerationID(integer $value) Set currentEnumerationID attribute.
 * Provides a fluent interface.
 * @method integer getCurrentEnumerationID getCurrentEnumerationID() Get
 * currentEnumerationID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setIsEditable()
 * setIsEditable(integer $value) Set isEditable attribute. Provides a fluent
 * interface.
 * @method integer getIsEditable getIsEditable() Get isEditable attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setLocalizedName()
 * setLocalizedName(string $value) Set localizedName attribute. Provides a fluent
 * interface.
 * @method string getLocalizedName getLocalizedName() Get localizedName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setIsExtracted()
 * setIsExtracted(integer $value) Set isExtracted attribute. Provides a fluent
 * interface.
 * @method integer getIsExtracted getIsExtracted() Get isExtracted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setIdentifier()
 * setIdentifier(string $value) Set identifier attribute. Provides a fluent
 * interface.
 * @method string getIdentifier getIdentifier() Get identifier attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setNotesDescription()
 * setNotesDescription(string $value) Set notesDescription attribute. Provides a
 * fluent interface.
 * @method string getNotesDescription getNotesDescription() Get notesDescription
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setIsMultiLanguage()
 * setIsMultiLanguage(integer $value) Set isMultiLanguage attribute. Provides a
 * fluent interface.
 * @method integer getIsMultiLanguage getIsMultiLanguage() Get isMultiLanguage
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setCustomType()
 * setCustomType(string $value) Set customType attribute. Provides a fluent
 * interface.
 * @method string getCustomType getCustomType() Get customType attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNodeType setDataNodes()
 * setDataNodes(array|Carerix_Api_Rest_Collection $values) Set dataNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getDataNodes getDataNodes() Get dataNodes relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRNodeType extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRNodeType';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $typeID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 32
     */
    public $name = null;

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
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEnumerated = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $currentEnumerationID = null;

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
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEditable = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $localizedName = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isExtracted = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $identifier = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notesDescription = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMultiLanguage = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $customType = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name dataNodes
     */
    public $dataNodes = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("nodeTypeID");
        $entityConfiguration->setName("CRNodeType");
    }


}
