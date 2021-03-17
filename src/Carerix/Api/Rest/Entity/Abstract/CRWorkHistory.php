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
 * @version Mon, 19 Nov 2018 11:56:01 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setEmployer()
 * setEmployer(string $value) Set employer attribute. Provides a fluent interface.
 * @method string getEmployer getEmployer() Get employer attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setFunction()
 * setFunction(string $value) Set function attribute. Provides a fluent interface.
 * @method string getFunction getFunction() Get function attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setInfo() setInfo(string
 * $value) Set info attribute. Provides a fluent interface.
 * @method string getInfo getInfo() Get info attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setWorkHistoryID()
 * setWorkHistoryID(integer $value) Set workHistoryID attribute. Provides a fluent
 * interface.
 * @method integer getWorkHistoryID getWorkHistoryID() Get workHistoryID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setWorkLocation()
 * setWorkLocation(string $value) Set workLocation attribute. Provides a fluent
 * interface.
 * @method string getWorkLocation getWorkLocation() Get workLocation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setEmployerInfo()
 * setEmployerInfo(string $value) Set employerInfo attribute. Provides a fluent
 * interface.
 * @method string getEmployerInfo getEmployerInfo() Get employerInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setEndReason()
 * setEndReason(string $value) Set endReason attribute. Provides a fluent
 * interface.
 * @method string getEndReason getEndReason() Get endReason attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setReference()
 * setReference(string $value) Set reference attribute. Provides a fluent
 * interface.
 * @method string getReference getReference() Get reference attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToBrancheLevel1()
 * setToBrancheLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toBrancheLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToBrancheLevel1
 * getToBrancheLevel1($index = null) Get toBrancheLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToBrancheLevel2()
 * setToBrancheLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toBrancheLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToBrancheLevel2
 * getToBrancheLevel2($index = null) Get toBrancheLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToFunctionLevel1()
 * setToFunctionLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionLevel1
 * getToFunctionLevel1($index = null) Get toFunctionLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToFunctionLevel2()
 * setToFunctionLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionLevel2
 * getToFunctionLevel2($index = null) Get toFunctionLevel2 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToProductTypeNode()
 * setToProductTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductTypeNode
 * getToProductTypeNode($index = null) Get toProductTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToContractTypeNode()
 * setToContractTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toContractTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToContractTypeNode
 * getToContractTypeNode($index = null) Get toContractTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRWorkHistory setToCompany()
 * setToCompany(array|Carerix_Api_Rest_Entity_CRCompany $value) Set toCompany
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToCompany getToCompany($index =
 * null) Get toCompany relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRWorkHistory extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRWorkHistory';

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
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $employer = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $function = null;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

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
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $info = null;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $workHistoryID = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $workLocation = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $employerInfo = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $endReason = null;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $reference = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     * @default
     * @nodeType Branche0
     */
    public $toBrancheLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel2
     * @default
     * @nodeType Branche1
     */
    public $toBrancheLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel1
     * @default
     * @nodeType Functie0
     */
    public $toFunctionLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel2
     * @default
     * @nodeType Functie1
     */
    public $toFunctionLevel2 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toContractTypeNode
     * @default
     * @nodeType Dienstverband
     */
    public $toContractTypeNode = null;

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
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("workHistoryID");
        $entityConfiguration->setName("CRWorkHistory");
    }


}
