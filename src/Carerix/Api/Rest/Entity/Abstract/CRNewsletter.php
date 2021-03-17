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
 * @version   Mon, 19 Nov 2018 11:56:21 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsVisible()
 * setIsVisible(integer $value) Set isVisible attribute. Provides a fluent
 * interface.
 * @method integer getIsVisible getIsVisible() Get isVisible attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsOpened()
 * setIsOpened(integer $value) Set isOpened attribute. Provides a fluent interface.
 * @method integer getIsOpened getIsOpened() Get isOpened attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsReceived()
 * setIsReceived(integer $value) Set isReceived attribute. Provides a fluent
 * interface.
 * @method integer getIsReceived getIsReceived() Get isReceived attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsVisibleForAllUsers()
 * setIsVisibleForAllUsers(integer $value) Set isVisibleForAllUsers attribute.
 * Provides a fluent interface.
 * @method integer getIsVisibleForAllUsers getIsVisibleForAllUsers() Get
 * isVisibleForAllUsers attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setStatus()
 * setStatus(integer $value) Set status attribute. Provides a fluent interface.
 * @method integer getStatus getStatus() Get status attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setName() setName(string
 * $value) Set name attribute. Provides a fluent interface.
 * @method string getName getName() Get name attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setNotes() setNotes(string
 * $value) Set notes attribute. Provides a fluent interface.
 * @method string getNotes getNotes() Get notes attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setTodoTypeKey()
 * setTodoTypeKey(integer $value) Set todoTypeKey attribute. Provides a fluent
 * interface.
 * @method integer getTodoTypeKey getTodoTypeKey() Get todoTypeKey attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setDeadline()
 * setDeadline(string $value) Set deadline attribute. Provides a fluent interface.
 * @method string getDeadline getDeadline() Get deadline attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setSubject()
 * setSubject(string $value) Set subject attribute. Provides a fluent interface.
 * @method string getSubject getSubject() Get subject attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setTodoID()
 * setTodoID(integer $value) Set todoID attribute. Provides a fluent interface.
 * @method integer getTodoID getTodoID() Get todoID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setEndTime()
 * setEndTime(string $value) Set endTime attribute. Provides a fluent interface.
 * @method string getEndTime getEndTime() Get endTime attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setReminderMinutes()
 * setReminderMinutes(integer $value) Set reminderMinutes attribute. Provides a
 * fluent interface.
 * @method integer getReminderMinutes getReminderMinutes() Get reminderMinutes
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setRepeatRate()
 * setRepeatRate(integer $value) Set repeatRate attribute. Provides a fluent
 * interface.
 * @method integer getRepeatRate getRepeatRate() Get repeatRate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setFromObjectKeyPath()
 * setFromObjectKeyPath(string $value) Set fromObjectKeyPath attribute. Provides a
 * fluent interface.
 * @method string getFromObjectKeyPath getFromObjectKeyPath() Get fromObjectKeyPath
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToObjectKeyPath()
 * setToObjectKeyPath(string $value) Set toObjectKeyPath attribute. Provides a
 * fluent interface.
 * @method string getToObjectKeyPath getToObjectKeyPath() Get toObjectKeyPath
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setUniqueID()
 * setUniqueID(string $value) Set uniqueID attribute. Provides a fluent interface.
 * @method string getUniqueID getUniqueID() Get uniqueID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setLocation()
 * setLocation(string $value) Set location attribute. Provides a fluent interface.
 * @method string getLocation getLocation() Get location attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAttendees()
 * setAttendees(string $value) Set attendees attribute. Provides a fluent
 * interface.
 * @method string getAttendees getAttendees() Get attendees attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToAddress()
 * setToAddress(string $value) Set toAddress attribute. Provides a fluent
 * interface.
 * @method string getToAddress getToAddress() Get toAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setCcAddress()
 * setCcAddress(string $value) Set ccAddress attribute. Provides a fluent
 * interface.
 * @method string getCcAddress getCcAddress() Get ccAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setFromAddress()
 * setFromAddress(string $value) Set fromAddress attribute. Provides a fluent
 * interface.
 * @method string getFromAddress getFromAddress() Get fromAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setOwnerKeyPath()
 * setOwnerKeyPath(string $value) Set ownerKeyPath attribute. Provides a fluent
 * interface.
 * @method string getOwnerKeyPath getOwnerKeyPath() Get ownerKeyPath attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsHTML()
 * setIsHTML(integer $value) Set isHTML attribute. Provides a fluent interface.
 * @method integer getIsHTML getIsHTML() Get isHTML attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setBccAddress()
 * setBccAddress(string $value) Set bccAddress attribute. Provides a fluent
 * interface.
 * @method string getBccAddress getBccAddress() Get bccAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setExpiryDate()
 * setExpiryDate(string $value) Set expiryDate attribute. Provides a fluent
 * interface.
 * @method string getExpiryDate getExpiryDate() Get expiryDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setPriority()
 * setPriority(integer $value) Set priority attribute. Provides a fluent interface.
 * @method integer getPriority getPriority() Get priority attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setReminderDate()
 * setReminderDate(string $value) Set reminderDate attribute. Provides a fluent
 * interface.
 * @method string getReminderDate getReminderDate() Get reminderDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setReplyToAddress()
 * setReplyToAddress(string $value) Set replyToAddress attribute. Provides a fluent
 * interface.
 * @method string getReplyToAddress getReplyToAddress() Get replyToAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setRecurrence()
 * setRecurrence(integer $value) Set recurrence attribute. Provides a fluent
 * interface.
 * @method integer getRecurrence getRecurrence() Get recurrence attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAttachmentCount()
 * setAttachmentCount(integer $value) Set attachmentCount attribute. Provides a
 * fluent interface.
 * @method integer getAttachmentCount getAttachmentCount() Get attachmentCount
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsConfidential()
 * setIsConfidential(integer $value) Set isConfidential attribute. Provides a
 * fluent interface.
 * @method integer getIsConfidential getIsConfidential() Get isConfidential
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setOtherRelationships()
 * setOtherRelationships(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * otherRelationships attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getOtherRelationships
 * getOtherRelationships() Get otherRelationships attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setRemind()
 * setRemind(integer $value) Set remind attribute. Provides a fluent interface.
 * @method integer getRemind getRemind() Get remind attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setOtherInfo()
 * setOtherInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set otherInfo
 * attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getOtherInfo getOtherInfo()
 * Get otherInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setHoursRealized()
 * setHoursRealized(integer $value) Set hoursRealized attribute. Provides a fluent
 * interface.
 * @method integer getHoursRealized getHoursRealized() Get hoursRealized attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setDateString()
 * setDateString(string $value) Set dateString attribute. Provides a fluent
 * interface.
 * @method string getDateString getDateString() Get dateString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setExternalIdentifier()
 * setExternalIdentifier(string $value) Set externalIdentifier attribute. Provides
 * a fluent interface.
 * @method string getExternalIdentifier getExternalIdentifier() Get
 * externalIdentifier attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setMonthString()
 * setMonthString(string $value) Set monthString attribute. Provides a fluent
 * interface.
 * @method string getMonthString getMonthString() Get monthString attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setIsTemplateVisible()
 * setIsTemplateVisible(integer $value) Set isTemplateVisible attribute. Provides a
 * fluent interface.
 * @method integer getIsTemplateVisible getIsTemplateVisible() Get
 * isTemplateVisible attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToDelayUnitNode()
 * setToDelayUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toDelayUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToDelayUnitNode
 * getToDelayUnitNode($index = null) Get toDelayUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setOwner()
 * setOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set owner relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getOwner getOwner($index = null) Get
 * owner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToCompany()
 * setToCompany(array|Carerix_Api_Rest_Entity_CRCompany $value) Set toCompany
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToCompany getToCompany($index =
 * null) Get toCompany relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToVacancy()
 * setToVacancy(array|Carerix_Api_Rest_Entity_CRVacancy $value) Set toVacancy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRVacancy getToVacancy getToVacancy($index =
 * null) Get toVacancy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToEmployee()
 * setToEmployee(array|Carerix_Api_Rest_Entity_CREmployee $value) Set toEmployee
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmployee getToEmployee getToEmployee($index =
 * null) Get toEmployee relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToContact()
 * setToContact(array|Carerix_Api_Rest_Entity_CRUser $value) Set toContact
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToContact getToContact($index = null)
 * Get toContact relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToStatusInfo()
 * setToStatusInfo(array|Carerix_Api_Rest_Entity_CRStatusInfo $value) Set
 * toStatusInfo relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRStatusInfo getToStatusInfo
 * getToStatusInfo($index = null) Get toStatusInfo relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToEmailTemplate()
 * setToEmailTemplate(array|Carerix_Api_Rest_Entity_CREmailTemplate $value) Set
 * toEmailTemplate relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CREmailTemplate getToEmailTemplate
 * getToEmailTemplate($index = null) Get toEmailTemplate relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToActivityTypeNode()
 * setToActivityTypeNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toActivityTypeNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToActivityTypeNode
 * getToActivityTypeNode($index = null) Get toActivityTypeNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToPreviousToDo()
 * setToPreviousToDo(array|Carerix_Api_Rest_Entity_CRToDo $value) Set
 * toPreviousToDo relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRToDo getToPreviousToDo
 * getToPreviousToDo($index = null) Get toPreviousToDo relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToTemplateReference()
 * setToTemplateReference(array|Carerix_Api_Rest_Entity_CRTemplateReference $value)
 * Set toTemplateReference relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRTemplateReference getToTemplateReference
 * getToTemplateReference($index = null) Get toTemplateReference relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToFetchSpecification()
 * setToFetchSpecification(array|Carerix_Api_Rest_Entity_CRFetchSpecification
 * $value) Set toFetchSpecification relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRFetchSpecification getToFetchSpecification
 * getToFetchSpecification($index = null) Get toFetchSpecification relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToPublication()
 * setToPublication(array|Carerix_Api_Rest_Entity_CRPublication $value) Set
 * toPublication relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRPublication getToPublication
 * getToPublication($index = null) Get toPublication relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToJob()
 * setToJob(array|Carerix_Api_Rest_Entity_CRJob $value) Set toJob relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRJob getToJob getToJob($index = null) Get toJob
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToWeekHourView()
 * setToWeekHourView(array|Carerix_Api_Rest_Entity_CRWeekHourView $value) Set
 * toWeekHourView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRWeekHourView getToWeekHourView
 * getToWeekHourView($index = null) Get toWeekHourView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToRecruiter()
 * setToRecruiter(array|Carerix_Api_Rest_Entity_CRUser $value) Set toRecruiter
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToRecruiter getToRecruiter($index =
 * null) Get toRecruiter relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToResultNode()
 * setToResultNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toResultNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToResultNode
 * getToResultNode($index = null) Get toResultNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToFolderNode()
 * setToFolderNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFolderNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFolderNode
 * getToFolderNode($index = null) Get toFolderNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToRepeatUnitNode()
 * setToRepeatUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toRepeatUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToRepeatUnitNode
 * getToRepeatUnitNode($index = null) Get toRepeatUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToWeekHourJobView()
 * setToWeekHourJobView(array|Carerix_Api_Rest_Entity_CRWeekHourJobView $value) Set
 * toWeekHourJobView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRWeekHourJobView getToWeekHourJobView
 * getToWeekHourJobView($index = null) Get toWeekHourJobView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToDoUsers()
 * setToDoUsers(array|Carerix_Api_Rest_Collection $values) Set toDoUsers
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRToDoUser
 * getToDoUsers getToDoUsers() Get toDoUsers relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setNextToDos()
 * setNextToDos(array|Carerix_Api_Rest_Collection $values) Set nextToDos
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRToDo getNextToDos
 * getNextToDos() Get nextToDos relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAttributeChanges()
 * setAttributeChanges(array|Carerix_Api_Rest_Collection $values) Set
 * attributeChanges relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttributeChange
 * getAttributeChanges getAttributeChanges() Get attributeChanges relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToNotes()
 * setToNotes(array|Carerix_Api_Rest_Entity_CRToDoNotes $value) Set toNotes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRToDoNotes getToNotes getToNotes($index = null)
 * Get toNotes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToLanguageNode()
 * setToLanguageNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageNode
 * getToLanguageNode($index = null) Get toLanguageNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToInvoice()
 * setToInvoice(array|Carerix_Api_Rest_Entity_CRInvoice $value) Set toInvoice
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRInvoice getToInvoice getToInvoice($index =
 * null) Get toInvoice relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToInvoiceLine()
 * setToInvoiceLine(array|Carerix_Api_Rest_Entity_CRInvoiceLine $value) Set
 * toInvoiceLine relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRInvoiceLine getToInvoiceLine
 * getToInvoiceLine($index = null) Get toInvoiceLine relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setEditionArticles()
 * setEditionArticles(array|Carerix_Api_Rest_Collection $values) Set
 * editionArticles relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREditionArticle
 * getEditionArticles getEditionArticles() Get editionArticles relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToProductNode()
 * setToProductNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductNode
 * getToProductNode($index = null) Get toProductNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setInvoiceLines()
 * setInvoiceLines(array|Carerix_Api_Rest_Collection $values) Set invoiceLines
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRInvoiceLine
 * getInvoiceLines getInvoiceLines() Get invoiceLines relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setResources()
 * setResources(array|Carerix_Api_Rest_Collection $values) Set resources
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRResource
 * getResources getResources() Get resources relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter
 * setToConfidentialUserRole()
 * setToConfidentialUserRole(array|Carerix_Api_Rest_Entity_CRUserRole $value) Set
 * toConfidentialUserRole relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUserRole getToConfidentialUserRole
 * getToConfidentialUserRole($index = null) Get toConfidentialUserRole
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToTransferData()
 * setToTransferData(array|Carerix_Api_Rest_Entity_CRAttachmentData $value) Set
 * toTransferData relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAttachmentData getToTransferData
 * getToTransferData($index = null) Get toTransferData relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToObjectImport()
 * setToObjectImport(array|Carerix_Api_Rest_Entity_CRObjectImport $value) Set
 * toObjectImport relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRObjectImport getToObjectImport
 * getToObjectImport($index = null) Get toObjectImport relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToLead()
 * setToLead(array|Carerix_Api_Rest_Entity_CRLead $value) Set toLead relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRLead getToLead getToLead($index = null) Get
 * toLead relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToOpportunity()
 * setToOpportunity(array|Carerix_Api_Rest_Entity_CROpportunity $value) Set
 * toOpportunity relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CROpportunity getToOpportunity
 * getToOpportunity($index = null) Get toOpportunity relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToMonthHourView()
 * setToMonthHourView(array|Carerix_Api_Rest_Entity_CRMonthHourView $value) Set
 * toMonthHourView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMonthHourView getToMonthHourView
 * getToMonthHourView($index = null) Get toMonthHourView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToMonthHourJobView()
 * setToMonthHourJobView(array|Carerix_Api_Rest_Entity_CRMonthHourJobView $value)
 * Set toMonthHourJobView relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRMonthHourJobView getToMonthHourJobView
 * getToMonthHourJobView($index = null) Get toMonthHourJobView relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRNewsletter setToTalentPool()
 * setToTalentPool(array|Carerix_Api_Rest_Entity_CRTalentPool $value) Set
 * toTalentPool relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRTalentPool getToTalentPool
 * getToTalentPool($index = null) Get toTalentPool relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRNewsletter extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRNewsletter';

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isVisible = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isOpened = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isReceived = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isVisibleForAllUsers = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $status = null;

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
     * @var string
     * @value_class NSString
     * @allows_null
     * @width
     */
    public $notes = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $todoTypeKey = 33;

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
    public $modificationDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $deadline = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $subject = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $todoID = null;

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
    public $endTime = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $reminderMinutes = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $repeatRate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $fromObjectKeyPath = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $toObjectKeyPath = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $uniqueID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1024
     */
    public $location = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10000
     */
    public $attendees = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $toAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $ccAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $fromAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $ownerKeyPath = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isHTML = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $bccAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $expiryDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $priority = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $reminderDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $replyToAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $recurrence = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $attachmentCount = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherRelationships = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $remind = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherInfo = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $hoursRealized = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       8
     */
    public $dateString = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $externalIdentifier = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       6
     */
    public $monthString = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isTemplateVisible = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toDelayUnitNode
     */
    public $toDelayUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name createdBy
     */
    public $createdBy = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name modifiedBy
     */
    public $modifiedBy = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            0
     * @name toCompany
     * @inverseName        _todos
     */
    public $toCompany = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRVacancy
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRVacancy")
     * @mandatory          0
     * @destination_entity CRVacancy
     * @to_many            0
     * @name toVacancy
     * @inverseName        _todos
     */
    public $toVacancy = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmployee
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          0
     * @destination_entity CREmployee
     * @to_many            0
     * @name toEmployee
     * @inverseName        _todos
     */
    public $toEmployee = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toContact
     * @inverseName        _todos
     */
    public $toContact = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRStatusInfo
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRStatusInfo")
     * @mandatory          0
     * @destination_entity CRStatusInfo
     * @to_many            0
     * @name toStatusInfo
     */
    public $toStatusInfo = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CREmailTemplate
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CREmailTemplate")
     * @mandatory          0
     * @destination_entity CREmailTemplate
     * @to_many            0
     * @name toEmailTemplate
     */
    public $toEmailTemplate = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toActivityTypeNode
     * @default            1
     * @nodeType           ${label}-type
     */
    public $toActivityTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRToDo
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRToDo")
     * @mandatory          0
     * @destination_entity CRToDo
     * @to_many            0
     * @name toPreviousToDo
     */
    public $toPreviousToDo = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRTemplateReference
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRTemplateReference")
     * @mandatory          0
     * @destination_entity CRTemplateReference
     * @to_many            0
     * @name toTemplateReference
     */
    public $toTemplateReference = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRFetchSpecification
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRFetchSpecification")
     * @mandatory          0
     * @destination_entity CRFetchSpecification
     * @to_many            0
     * @name toFetchSpecification
     */
    public $toFetchSpecification = null;

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
     * @var Carerix_Api_Rest_Entity_CRJob
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRJob")
     * @mandatory          0
     * @destination_entity CRJob
     * @to_many            0
     * @name toJob
     * @inverseName        _todos
     */
    public $toJob = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRWeekHourView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourView")
     * @mandatory          0
     * @destination_entity CRWeekHourView
     * @to_many            0
     * @name toWeekHourView
     */
    public $toWeekHourView = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toRecruiter
     */
    public $toRecruiter = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toResultNode
     * @default            1
     * @nodeType           ${label}-resultaat
     */
    public $toResultNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default            1
     * @nodeType           ${label}-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toFolderNode
     */
    public $toFolderNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toRepeatUnitNode
     * @default
     * @nodeType           Herhalings-eenheid
     */
    public $toRepeatUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRWeekHourJobView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRWeekHourJobView")
     * @mandatory          0
     * @destination_entity CRWeekHourJobView
     * @to_many            0
     * @name toWeekHourJobView
     */
    public $toWeekHourJobView = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRToDoUser")
     * @mandatory          0
     * @destination_entity CRToDoUser
     * @to_many            1
     * @name toDoUsers
     * @inverseName        toToDo
     */
    public $toDoUsers = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRToDo")
     * @mandatory          0
     * @destination_entity CRToDo
     * @to_many            1
     * @name nextToDos
     */
    public $nextToDos = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttributeChange")
     * @mandatory          0
     * @destination_entity CRAttributeChange
     * @to_many            1
     * @name attributeChanges
     */
    public $attributeChanges = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRToDoNotes
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRToDoNotes")
     * @mandatory          0
     * @destination_entity CRToDoNotes
     * @to_many            0
     * @name toNotes
     */
    public $toNotes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguageNode
     * @default
     * @nodeType           Systeemtaal
     */
    public $toLanguageNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRInvoice
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRInvoice")
     * @mandatory          0
     * @destination_entity CRInvoice
     * @to_many            0
     * @name toInvoice
     */
    public $toInvoice = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRInvoiceLine
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRInvoiceLine")
     * @mandatory          0
     * @destination_entity CRInvoiceLine
     * @to_many            0
     * @name toInvoiceLine
     */
    public $toInvoiceLine = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREditionArticle")
     * @mandatory          0
     * @destination_entity CREditionArticle
     * @to_many            1
     * @name editionArticles
     */
    public $editionArticles = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProductNode
     * @default            1
     * @nodeType           Product
     */
    public $toProductNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRInvoiceLine")
     * @mandatory          0
     * @destination_entity CRInvoiceLine
     * @to_many            1
     * @name invoiceLines
     */
    public $invoiceLines = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRResource")
     * @mandatory          0
     * @destination_entity CRResource
     * @to_many            1
     * @name resources
     */
    public $resources = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUserRole
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUserRole")
     * @mandatory          0
     * @destination_entity CRUserRole
     * @to_many            0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRAttachmentData
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAttachmentData")
     * @mandatory          0
     * @destination_entity CRAttachmentData
     * @to_many            0
     * @name toTransferData
     */
    public $toTransferData = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRAttachment")
     * @mandatory          0
     * @destination_entity CRAttachment
     * @to_many            1
     * @name attachments
     */
    public $attachments = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRObjectImport
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRObjectImport")
     * @mandatory          0
     * @destination_entity CRObjectImport
     * @to_many            0
     * @name toObjectImport
     */
    public $toObjectImport = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRLead
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRLead")
     * @mandatory          0
     * @destination_entity CRLead
     * @to_many            0
     * @name toLead
     * @inverseName        _todos
     */
    public $toLead = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CROpportunity
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CROpportunity")
     * @mandatory          0
     * @destination_entity CROpportunity
     * @to_many            0
     * @name toOpportunity
     * @inverseName        _todos
     */
    public $toOpportunity = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRMonthHourView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMonthHourView")
     * @mandatory          0
     * @destination_entity CRMonthHourView
     * @to_many            0
     * @name toMonthHourView
     */
    public $toMonthHourView = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRMonthHourJobView
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRMonthHourJobView")
     * @mandatory          0
     * @destination_entity CRMonthHourJobView
     * @to_many            0
     * @name toMonthHourJobView
     */
    public $toMonthHourJobView = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRTalentPool
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRTalentPool")
     * @mandatory          0
     * @destination_entity CRTalentPool
     * @to_many            0
     * @name toTalentPool
     * @inverseName        _todos
     */
    public $toTalentPool = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("newsletterID");
        $entityConfiguration->setName("CRNewsletter");
    }


}
