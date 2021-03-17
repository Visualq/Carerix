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
 * @version   Mon, 19 Nov 2018 11:55:51 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRPublicationMedium setToMedium()
 * setToMedium(array|Carerix_Api_Rest_Entity_CRMedium $value) Set toMedium
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMedium getToMedium getToMedium($index = null)
 * Get toMedium relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRPublicationMedium setToPublication()
 * setToPublication(array|Carerix_Api_Rest_Entity_CRPublication $value) Set
 * toPublication relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRPublication getToPublication
 * getToPublication($index = null) Get toPublication relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRPublicationMedium extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRPublicationMedium';

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

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("publicationMediumID");
        $entityConfiguration->setName("CRPublicationMedium");
    }
}
