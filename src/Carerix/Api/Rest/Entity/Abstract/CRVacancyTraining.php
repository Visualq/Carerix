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
 * @version Mon, 19 Nov 2018 11:55:58 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining
 * setVacancyTrainingID() setVacancyTrainingID(integer $value) Set
 * vacancyTrainingID attribute. Provides a fluent interface.
 * @method integer getVacancyTrainingID getVacancyTrainingID() Get
 * vacancyTrainingID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setStartDate()
 * setStartDate(string $value) Set startDate attribute. Provides a fluent
 * interface.
 * @method string getStartDate getStartDate() Get startDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setEndDate()
 * setEndDate(string $value) Set endDate attribute. Provides a fluent interface.
 * @method string getEndDate getEndDate() Get endDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setToVacancy()
 * setToVacancy(array|Carerix_Api_Rest_Entity_CRVacancy $value) Set toVacancy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRVacancy getToVacancy getToVacancy($index =
 * null) Get toVacancy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setToTrainingLevel1()
 * setToTrainingLevel1(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toTrainingLevel1 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTrainingLevel1
 * getToTrainingLevel1($index = null) Get toTrainingLevel1 relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining setToTrainingLevel2()
 * setToTrainingLevel2(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toTrainingLevel2 relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTrainingLevel2
 * getToTrainingLevel2($index = null) Get toTrainingLevel2 relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRVacancyTraining extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRVacancyTraining';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancyTrainingID = null;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate = null;

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
     * @var Carerix_Api_Rest_Entity_CRVacancy
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrainingLevel1
     * @default
     * @nodeType Cursus0
     */
    public $toTrainingLevel1 = null;

    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrainingLevel2
     * @default
     * @nodeType Cursus1
     */
    public $toTrainingLevel2 = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancyTrainingID");
        $entityConfiguration->setName("CRVacancyTraining");
    }


}
