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
 * @version   Mon, 19 Nov 2018 11:55:50 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setPostingID()
 * setPostingID(integer $value) Set postingID attribute. Provides a fluent
 * interface.
 * @method integer getPostingID getPostingID() Get postingID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setLastAttemptDate()
 * setLastAttemptDate(string $value) Set lastAttemptDate attribute. Provides a
 * fluent interface.
 * @method string getLastAttemptDate getLastAttemptDate() Get lastAttemptDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setErrorNumber()
 * setErrorNumber(string $value) Set errorNumber attribute. Provides a fluent
 * interface.
 * @method string getErrorNumber getErrorNumber() Get errorNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setTryCount()
 * setTryCount(integer $value) Set tryCount attribute. Provides a fluent interface.
 * @method integer getTryCount getTryCount() Get tryCount attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setToPublication()
 * setToPublication(array|Carerix_Api_Rest_Entity_CRPublication $value) Set
 * toPublication relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRPublication getToPublication
 * getToPublication($index = null) Get toPublication relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPosting setToMedium()
 * setToMedium(array|Carerix_Api_Rest_Entity_CRMedium $value) Set toMedium
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMedium getToMedium getToMedium($index = null)
 * Get toMedium relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRPosting extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRPosting';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $postingID = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastAttemptDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       16
     */
    public $errorNumber = null;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $tryCount = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRPublication
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRPublication")
     * @mandatory          0
     * @destination_entity CRPublication
     * @to_many            0
     * @name toPublication
     */
    public $toPublication = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default
     * @nodeType           Posting-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRMedium
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMedium")
     * @mandatory          0
     * @destination_entity CRMedium
     * @to_many            0
     * @name toMedium
     */
    public $toMedium = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("postingID");
        $entityConfiguration->setName("CRPosting");
    }


}
