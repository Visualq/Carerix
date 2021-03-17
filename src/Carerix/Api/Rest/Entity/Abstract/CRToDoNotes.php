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
 * @version   Mon, 19 Nov 2018 11:55:53 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoNotes setNotesHash()
 * setNotesHash(string $value) Set notesHash attribute. Provides a fluent
 * interface.
 * @method string getNotesHash getNotesHash() Get notesHash attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRToDoNotes setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRToDoNotes extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRToDoNotes';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width       32
     */
    public $notesHash = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $notes = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("toDoNotesID");
        $entityConfiguration->setName("CRToDoNotes");
    }


}
