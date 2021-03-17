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
 * @version Mon, 19 Nov 2018 11:55:46 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setEmployeeSkillID()
 * setEmployeeSkillID(integer $value) Set employeeSkillID attribute. Provides a
 * fluent interface.
 * @method integer getEmployeeSkillID getEmployeeSkillID() Get employeeSkillID
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setToSkillLevel1()
 * setToSkillLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSkillLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSkillLevel1
 * getToSkillLevel1($index = null) Get toSkillLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setToSkillLevel2()
 * setToSkillLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSkillLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSkillLevel2
 * getToSkillLevel2($index = null) Get toSkillLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill setToSkillLevel3()
 * setToSkillLevel3(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSkillLevel3 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSkillLevel3
 * getToSkillLevel3($index = null) Get toSkillLevel3 relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmployeeSkill extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmployeeSkill';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeSkillID = null;

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
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID = null;

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
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSkillLevel1
     * @default
     * @nodeType Vaardigheid0
     */
    public $toSkillLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSkillLevel2
     * @default
     * @nodeType Vaardigheid1
     */
    public $toSkillLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSkillLevel3
     * @default
     * @nodeType Vaardigheid2
     */
    public $toSkillLevel3 = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeSkillID");
        $entityConfiguration->setName("CREmployeeSkill");
    }


}
