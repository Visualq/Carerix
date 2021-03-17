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
 * @category  Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.carerix.com
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version   Fri, 23 Sep 2011 10:21:00 +0300
 */
class Carerix_Api_Rest_Entity_CRToDo extends Carerix_Api_Rest_Entity_Abstract_CRToDo
{
    const TODO_TYPE_KEY_TASK = 0;
    const TODO_TYPE_KEY_EMAIL = 3;
    const TODO_TYPE_KEY_NOTE = 4;
    const TODO_TYPE_KEY_DRAFT = 5;
    const TODO_TYPE_KEY_SYSTEM_ACTIVITY = 25;
    const TODO_TYPE_KEY_CAMPAIGN = 22;
    const TODO_TYPE_KEY_NEWSLETTER = 33;
    const TODO_TYPE_KEY_EDITION = 34;
    const TODO_TYPE_KEY_MEETING = 1;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     * @entity           CRToDo.meeting
     */
    public $ownerID = null;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSString
     * @entity   CRToDo.meeting
     */
    public $id;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSString
     * @entity   CRToDo.meeting
     */
    public $bgColorCode;

    /**
     * @cx_field true
     * @access   private
     * delay
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $delay;

    /**
     * isOpened
     *
     * @entity CRToDo.Edition
     * @var integer
     * @access private
     * @type NSNumber
     */
    public $isOpened;

    /**
     * @cx_field true
     * @access   private
     * isReceived
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $isReceived;

    /**
     * @cx_field true
     * @access   private
     * placeHolders
     * @entity   CRToDo.Edition
     * @var ?
     */
    public $placeHolders;

    /**
     * @cx_field true
     * @access   private
     * numberSent
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $numberSent;

    /**
     * @cx_field true
     * @access   private
     * title
     * @var string
     * @type NSString
     */
    public $title;

    /**
     * @var integer
     * @type NSNumber
     * @length   N/A
     * @required true
     * @access   private
     */
    public $isVisibleForAllUsers = null;

    /**
     * @cx_field true
     * @access   private
     * @var integer
     * @type NSNumber
     * @length   N/A
     * @required true
     * @entity   CRToDo.meeting
     */
    public $isAllDay = null;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSCalendarDate
     * @length   N/A
     * @required false
     * @entity   CRToDo.meeting
     */
    public $startDate;

    /**
     * @cx_field true
     * @var string
     * @type NSCalendarDate
     * @length   N/A
     * @required false
     * @access   private
     * @entity   CRToDo.meeting
     */
    public $endDate;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     * @entity      CRToDo.meeting
     */
    public $notes = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     * @entity      CRToDo.meeting
     */
    public $summary = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $name = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $editions = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toDelayUnitNode
     * @nodeType           Uitstel-eenheid
     */
    public $toDelayUnitNode = null;

    /**
     * Set toDelayUnitNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_CRDraft
     */
    public function setToDelayUnitNode($value)
    {
        if (is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toDelayUnitNode = $value;
        return $this;
    }

    /**
     * Get toDelayUnitNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToDelayUnitNode()
    {
        return $this->toDelayUnitNode;
    }

    /**
     * Gets delay
     *
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Sets delay
     *
     * @param integer $delay delay
     *
     * @return self
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
        return $this;
    }

    /**
     * Gets isOpened
     *
     * @return integer
     */
    public function getIsOpened()
    {
        return $this->isOpened;
    }

    /**
     * Sets isOpened
     *
     * @param integer $isOpened isOpened
     *
     * @return self
     */
    public function setIsOpened($isOpened)
    {
        $this->isOpened = $isOpened;
        return $this;
    }

    /**
     * Gets isReceived
     *
     * @return PropertyType
     */
    public function getIsReceived()
    {
        return $this->isReceived;
    }

    /**
     * Sets isReceived
     *
     * @param PropertyType $isReceived isReceived
     *
     * @return self
     */
    public function setIsReceived($isReceived)
    {
        $this->isReceived = $isReceived;
        return $this;
    }

    /**
     * Gets numberSent
     *
     * @return integer
     */
    public function getNumberSent()
    {
        return $this->numberSent;
    }

    /**
     * Sets numberSent
     *
     * @param integer $numberSent numberSent
     *
     * @return self
     */
    public function setNumberSent($numberSent)
    {
        $this->numberSent = $numberSent;
        return $this;
    }

    /**
     * Gets placeHolders
     *
     * @return ?
     */
    public function getPlaceHolders()
    {
        return $this->placeHolders;
    }

    /**
     * Sets placeHolders
     *
     * @param ? $placeHolders placeHolders
     *
     * @return self
     */
    public function setPlaceHolders($placeHolders)
    {
        $this->placeHolders = $placeHolders;
        return $this;
    }

    /**
     * subTitle
     *
     * @var string
     * @access private
     * @type NSString
     */
    public $subTitle;

    /**
     * Gets subTitle
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets subTitle
     *
     * @param string $subTitle subTitle
     *
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set Editions.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Collection $values
     *
     * @return Carerix_Api_Rest_Entity_CRToDo
     */
    public function setEditions($values)
    {
        if (is_array($values)) {
            $values = new Carerix_Api_Rest_DataType_NSArray($values);
        }
        $this->editions = $values;
        return $this;
    }

    /**
     * Get editions.
     *
     * @return Carerix_Api_Rest_DataType_NSArray|array
     */
    public function getEditions()
    {
        return $this->editions;
    }

    /**
     * Set name.
     *
     * Provides a fluent interface.
     *
     * @param string $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isVisibleForAllUsers.
     *
     * Provides a fluent interface.
     *
     * @param integer $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setIsVisibleForAllUsers($value)
    {
        $this->isVisibleForAllUsers = $value;
        return $this;
    }

    /**
     * Get isVisibleForAllUsers.
     *
     * @return integer
     */
    public function getIsVisibleForAllUsers()
    {
        return $this->isVisibleForAllUsers;
    }

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets startDate
     *
     * Provides a fluent interface.
     *
     * @param string $startDate startDate
     *
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * Provides a fluent interface.
     *
     * @param string $endDate endDate
     *
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Set isAllDay.
     *
     * Provides a fluent interface.
     *
     * @param integer $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_To_Do
     */
    public function setIsAllDay($value)
    {
        $this->isAllDay = $value;
        return $this;
    }

    /**
     * Get isAllDay.
     *
     * @return integer
     */
    public function getIsAllDay()
    {
        return $this->isAllDay;
    }

    /**
     * Entity configuration.
     * Patch for non-standard identifier key. Expected toDoID. Actual todoID.
     *
     * @param Carerix_Api_Rest_EntityConfiguration $entityConfiguration
     */
    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("todoID");
    }

    /**
     * Gets notes
     *
     * @return NSString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets notes
     *
     * @param NSString $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
}
