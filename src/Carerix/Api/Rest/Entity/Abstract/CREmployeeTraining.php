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
 * @version   Mon, 19 Nov 2018 11:55:46 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining
 * setEmployeeTrainingID() setEmployeeTrainingID(integer $value) Set
 * employeeTrainingID attribute. Provides a fluent interface.
 * @method integer getEmployeeTrainingID getEmployeeTrainingID() Get
 * employeeTrainingID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining
 * setModificationDate() setModificationDate(string $value) Set modificationDate
 * attribute. Provides a fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setTrainer()
 * setTrainer(string $value) Set trainer attribute. Provides a fluent interface.
 * @method string getTrainer getTrainer() Get trainer attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setName()
 * setName(string $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining setToTraining()
 * setToTraining(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set toTraining
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTraining getToTraining($index =
 * null) Get toTraining relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining
 * setToTrainingLevel2()
 * setToTrainingLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toTrainingLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTrainingLevel2
 * getToTrainingLevel2($index = null) Get toTrainingLevel2 relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CREmployeeTraining extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CREmployeeTraining';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $employeeTrainingID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       128
     */
    public $trainer = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $name = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          0
     * @destination_entity CREmployee
     * @to_many            0
     * @name toEmployee
     */
    public $toEmployee = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toTraining
     * @default
     * @nodeType           Cursus0
     */
    public $toTraining = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toTrainingLevel2
     * @default
     * @nodeType           Cursus1
     */
    public $toTrainingLevel2 = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeTrainingID");
        $entityConfiguration->setName("CREmployeeTraining");
    }
}
