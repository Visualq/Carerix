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
 * @version   Mon, 19 Nov 2018 11:56:23 +0200
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPhoto() setPhoto(string
 * $value) Set photo attribute. Provides a fluent interface.
 * @method string getPhoto getPhoto() Get photo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setCompanyInformation()
 * setCompanyInformation(string $value) Set companyInformation attribute. Provides
 * a fluent interface.
 * @method string getCompanyInformation getCompanyInformation() Get
 * companyInformation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitAddress()
 * setVisitAddress(string $value) Set visitAddress attribute. Provides a fluent
 * interface.
 * @method string getVisitAddress getVisitAddress() Get visitAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAddress()
 * setAddress(string $value) Set address attribute. Provides a fluent interface.
 * @method string getAddress getAddress() Get address attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setContactID()
 * setContactID(integer $value) Set contactID attribute. Provides a fluent
 * interface.
 * @method integer getContactID getContactID() Get contactID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setEmailAddress()
 * setEmailAddress(string $value) Set emailAddress attribute. Provides a fluent
 * interface.
 * @method string getEmailAddress getEmailAddress() Get emailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeEmailAddress()
 * setHomeEmailAddress(string $value) Set homeEmailAddress attribute. Provides a
 * fluent interface.
 * @method string getHomeEmailAddress getHomeEmailAddress() Get homeEmailAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setBusinessEmailAddress()
 * setBusinessEmailAddress(string $value) Set businessEmailAddress attribute.
 * Provides a fluent interface.
 * @method string getBusinessEmailAddress getBusinessEmailAddress() Get
 * businessEmailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPrivateEmailAddress()
 * setPrivateEmailAddress(string $value) Set privateEmailAddress attribute.
 * Provides a fluent interface.
 * @method string getPrivateEmailAddress getPrivateEmailAddress() Get
 * privateEmailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setBusinessOrPrivateEmailAddress() setBusinessOrPrivateEmailAddress(string
 * $value) Set businessOrPrivateEmailAddress attribute. Provides a fluent
 * interface.
 * @method string getBusinessOrPrivateEmailAddress
 * getBusinessOrPrivateEmailAddress() Get businessOrPrivateEmailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setPrivateOrBusinessEmailAddress() setPrivateOrBusinessEmailAddress(string
 * $value) Set privateOrBusinessEmailAddress attribute. Provides a fluent
 * interface.
 * @method string getPrivateOrBusinessEmailAddress
 * getPrivateOrBusinessEmailAddress() Get privateOrBusinessEmailAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setBirthDay()
 * setBirthDay(string $value) Set birthDay attribute. Provides a fluent interface.
 * @method string getBirthDay getBirthDay() Get birthDay attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHasPhoto()
 * setHasPhoto(integer $value) Set hasPhoto attribute. Provides a fluent interface.
 * @method integer getHasPhoto getHasPhoto() Get hasPhoto attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setSystemLanguage()
 * setSystemLanguage(string $value) Set systemLanguage attribute. Provides a fluent
 * interface.
 * @method string getSystemLanguage getSystemLanguage() Get systemLanguage
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setModificationDate()
 * setModificationDate(string $value) Set modificationDate attribute. Provides a
 * fluent interface.
 * @method string getModificationDate getModificationDate() Get modificationDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setCreationDate()
 * setCreationDate(string $value) Set creationDate attribute. Provides a fluent
 * interface.
 * @method string getCreationDate getCreationDate() Get creationDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setFirstName()
 * setFirstName(string $value) Set firstName attribute. Provides a fluent
 * interface.
 * @method string getFirstName getFirstName() Get firstName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setInitials()
 * setInitials(string $value) Set initials attribute. Provides a fluent interface.
 * @method string getInitials getInitials() Get initials attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setLastName()
 * setLastName(string $value) Set lastName attribute. Provides a fluent interface.
 * @method string getLastName getLastName() Get lastName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPassword()
 * setPassword(string $value) Set password attribute. Provides a fluent interface.
 * @method string getPassword getPassword() Get password attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserName()
 * setUserName(string $value) Set userName attribute. Provides a fluent interface.
 * @method string getUserName getUserName() Get userName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setWantsCookie()
 * setWantsCookie(integer $value) Set wantsCookie attribute. Provides a fluent
 * interface.
 * @method integer getWantsCookie getWantsCookie() Get wantsCookie attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserID() setUserID(integer
 * $value) Set userID attribute. Provides a fluent interface.
 * @method integer getUserID getUserID() Get userID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setLastNamePrefix()
 * setLastNamePrefix(string $value) Set lastNamePrefix attribute. Provides a fluent
 * interface.
 * @method string getLastNamePrefix getLastNamePrefix() Get lastNamePrefix
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setCity() setCity(string
 * $value) Set city attribute. Provides a fluent interface.
 * @method string getCity getCity() Get city attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setDeleted()
 * setDeleted(integer $value) Set deleted attribute. Provides a fluent interface.
 * @method integer getDeleted getDeleted() Get deleted attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setBirthDate()
 * setBirthDate(string $value) Set birthDate attribute. Provides a fluent
 * interface.
 * @method string getBirthDate getBirthDate() Get birthDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHouseNumber()
 * setHouseNumber(string $value) Set houseNumber attribute. Provides a fluent
 * interface.
 * @method string getHouseNumber getHouseNumber() Get houseNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setJobTitle()
 * setJobTitle(string $value) Set jobTitle attribute. Provides a fluent interface.
 * @method string getJobTitle getJobTitle() Get jobTitle attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPostalCode()
 * setPostalCode(string $value) Set postalCode attribute. Provides a fluent
 * interface.
 * @method string getPostalCode getPostalCode() Get postalCode attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setStreet() setStreet(string
 * $value) Set street attribute. Provides a fluent interface.
 * @method string getStreet getStreet() Get street attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsNewUser()
 * setIsNewUser(integer $value) Set isNewUser attribute. Provides a fluent
 * interface.
 * @method integer getIsNewUser getIsNewUser() Get isNewUser attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAbbreviation()
 * setAbbreviation(string $value) Set abbreviation attribute. Provides a fluent
 * interface.
 * @method string getAbbreviation getAbbreviation() Get abbreviation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setImportID()
 * setImportID(string $value) Set importID attribute. Provides a fluent interface.
 * @method string getImportID getImportID() Get importID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHouseNumberSuffix()
 * setHouseNumberSuffix(string $value) Set houseNumberSuffix attribute. Provides a
 * fluent interface.
 * @method string getHouseNumberSuffix getHouseNumberSuffix() Get houseNumberSuffix
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setSuffix() setSuffix(string
 * $value) Set suffix attribute. Provides a fluent interface.
 * @method string getSuffix getSuffix() Get suffix attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setFullAddress()
 * setFullAddress(string $value) Set fullAddress attribute. Provides a fluent
 * interface.
 * @method string getFullAddress getFullAddress() Get fullAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setExportID()
 * setExportID(integer $value) Set exportID attribute. Provides a fluent interface.
 * @method integer getExportID getExportID() Get exportID attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitCity()
 * setVisitCity(string $value) Set visitCity attribute. Provides a fluent
 * interface.
 * @method string getVisitCity getVisitCity() Get visitCity attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitNumber()
 * setVisitNumber(string $value) Set visitNumber attribute. Provides a fluent
 * interface.
 * @method string getVisitNumber getVisitNumber() Get visitNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitPostalCode()
 * setVisitPostalCode(string $value) Set visitPostalCode attribute. Provides a
 * fluent interface.
 * @method string getVisitPostalCode getVisitPostalCode() Get visitPostalCode
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitStreet()
 * setVisitStreet(string $value) Set visitStreet attribute. Provides a fluent
 * interface.
 * @method string getVisitStreet getVisitStreet() Get visitStreet attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitFullAddress()
 * setVisitFullAddress(string $value) Set visitFullAddress attribute. Provides a
 * fluent interface.
 * @method string getVisitFullAddress getVisitFullAddress() Get visitFullAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVisitNumberSuffix()
 * setVisitNumberSuffix(string $value) Set visitNumberSuffix attribute. Provides a
 * fluent interface.
 * @method string getVisitNumberSuffix getVisitNumberSuffix() Get visitNumberSuffix
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setSourceInfo()
 * setSourceInfo(string $value) Set sourceInfo attribute. Provides a fluent
 * interface.
 * @method string getSourceInfo getSourceInfo() Get sourceInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsLoginBlocked()
 * setIsLoginBlocked(integer $value) Set isLoginBlocked attribute. Provides a
 * fluent interface.
 * @method integer getIsLoginBlocked getIsLoginBlocked() Get isLoginBlocked
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setForwardEmail()
 * setForwardEmail(integer $value) Set forwardEmail attribute. Provides a fluent
 * interface.
 * @method integer getForwardEmail getForwardEmail() Get forwardEmail attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setExternalIdentifier()
 * setExternalIdentifier(string $value) Set externalIdentifier attribute. Provides
 * a fluent interface.
 * @method string getExternalIdentifier getExternalIdentifier() Get
 * externalIdentifier attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTrialPeriodAmount()
 * setTrialPeriodAmount(integer $value) Set trialPeriodAmount attribute. Provides a
 * fluent interface.
 * @method integer getTrialPeriodAmount getTrialPeriodAmount() Get
 * trialPeriodAmount attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setConditionsInformation()
 * setConditionsInformation(string $value) Set conditionsInformation attribute.
 * Provides a fluent interface.
 * @method string getConditionsInformation getConditionsInformation() Get
 * conditionsInformation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setFaxNumber()
 * setFaxNumber(string $value) Set faxNumber attribute. Provides a fluent
 * interface.
 * @method string getFaxNumber getFaxNumber() Get faxNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setFaxNumberBusiness()
 * setFaxNumberBusiness(string $value) Set faxNumberBusiness attribute. Provides a
 * fluent interface.
 * @method string getFaxNumberBusiness getFaxNumberBusiness() Get faxNumberBusiness
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setInternalAddress()
 * setInternalAddress(string $value) Set internalAddress attribute. Provides a
 * fluent interface.
 * @method string getInternalAddress getInternalAddress() Get internalAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setLastContactDate()
 * setLastContactDate(string $value) Set lastContactDate attribute. Provides a
 * fluent interface.
 * @method string getLastContactDate getLastContactDate() Get lastContactDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMobileNumber()
 * setMobileNumber(string $value) Set mobileNumber attribute. Provides a fluent
 * interface.
 * @method string getMobileNumber getMobileNumber() Get mobileNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMobileNumberBusiness()
 * setMobileNumberBusiness(string $value) Set mobileNumberBusiness attribute.
 * Provides a fluent interface.
 * @method string getMobileNumberBusiness getMobileNumberBusiness() Get
 * mobileNumberBusiness attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setOrganisationInformation()
 * setOrganisationInformation(string $value) Set organisationInformation attribute.
 * Provides a fluent interface.
 * @method string getOrganisationInformation getOrganisationInformation() Get
 * organisationInformation attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPhoneNumber()
 * setPhoneNumber(string $value) Set phoneNumber attribute. Provides a fluent
 * interface.
 * @method string getPhoneNumber getPhoneNumber() Get phoneNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPhoneNumberBusiness()
 * setPhoneNumberBusiness(string $value) Set phoneNumberBusiness attribute.
 * Provides a fluent interface.
 * @method string getPhoneNumberBusiness getPhoneNumberBusiness() Get
 * phoneNumberBusiness attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTitle() setTitle(string
 * $value) Set title attribute. Provides a fluent interface.
 * @method string getTitle getTitle() Get title attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserInformation()
 * setUserInformation(string $value) Set userInformation attribute. Provides a
 * fluent interface.
 * @method string getUserInformation getUserInformation() Get userInformation
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsTokenWorkActive()
 * setIsTokenWorkActive(integer $value) Set isTokenWorkActive attribute. Provides a
 * fluent interface.
 * @method integer getIsTokenWorkActive getIsTokenWorkActive() Get
 * isTokenWorkActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenWork()
 * setTokenWork(string $value) Set tokenWork attribute. Provides a fluent
 * interface.
 * @method string getTokenWork getTokenWork() Get tokenWork attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenWorkValidUntilDate()
 * setTokenWorkValidUntilDate(string $value) Set tokenWorkValidUntilDate attribute.
 * Provides a fluent interface.
 * @method string getTokenWorkValidUntilDate getTokenWorkValidUntilDate() Get
 * tokenWorkValidUntilDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenHome()
 * setTokenHome(string $value) Set tokenHome attribute. Provides a fluent
 * interface.
 * @method string getTokenHome getTokenHome() Get tokenHome attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsTokenHomeActive()
 * setIsTokenHomeActive(integer $value) Set isTokenHomeActive attribute. Provides a
 * fluent interface.
 * @method integer getIsTokenHomeActive getIsTokenHomeActive() Get
 * isTokenHomeActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenHomeValidUntilDate()
 * setTokenHomeValidUntilDate(string $value) Set tokenHomeValidUntilDate attribute.
 * Provides a fluent interface.
 * @method string getTokenHomeValidUntilDate getTokenHomeValidUntilDate() Get
 * tokenHomeValidUntilDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenRoad()
 * setTokenRoad(string $value) Set tokenRoad attribute. Provides a fluent
 * interface.
 * @method string getTokenRoad getTokenRoad() Get tokenRoad attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsTokenRoadActive()
 * setIsTokenRoadActive(integer $value) Set isTokenRoadActive attribute. Provides a
 * fluent interface.
 * @method integer getIsTokenRoadActive getIsTokenRoadActive() Get
 * isTokenRoadActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTokenEmailAddress()
 * setTokenEmailAddress(string $value) Set tokenEmailAddress attribute. Provides a
 * fluent interface.
 * @method string getTokenEmailAddress getTokenEmailAddress() Get tokenEmailAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsTbaActive()
 * setIsTbaActive(integer $value) Set isTbaActive attribute. Provides a fluent
 * interface.
 * @method integer getIsTbaActive getIsTbaActive() Get isTbaActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPasswordValidUntilDate()
 * setPasswordValidUntilDate(string $value) Set passwordValidUntilDate attribute.
 * Provides a fluent interface.
 * @method string getPasswordValidUntilDate getPasswordValidUntilDate() Get
 * passwordValidUntilDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setOutOfOfficeDate()
 * setOutOfOfficeDate(string $value) Set outOfOfficeDate attribute. Provides a
 * fluent interface.
 * @method string getOutOfOfficeDate getOutOfOfficeDate() Get outOfOfficeDate
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMailboxURLString()
 * setMailboxURLString(string $value) Set mailboxURLString attribute. Provides a
 * fluent interface.
 * @method string getMailboxURLString getMailboxURLString() Get mailboxURLString
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMailboxDate()
 * setMailboxDate(string $value) Set mailboxDate attribute. Provides a fluent
 * interface.
 * @method string getMailboxDate getMailboxDate() Get mailboxDate attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMailboxFlags()
 * setMailboxFlags(integer $value) Set mailboxFlags attribute. Provides a fluent
 * interface.
 * @method integer getMailboxFlags getMailboxFlags() Get mailboxFlags attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setOutOfOfficeText()
 * setOutOfOfficeText(string $value) Set outOfOfficeText attribute. Provides a
 * fluent interface.
 * @method string getOutOfOfficeText getOutOfOfficeText() Get outOfOfficeText
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTimeZoneName()
 * setTimeZoneName(string $value) Set timeZoneName attribute. Provides a fluent
 * interface.
 * @method string getTimeZoneName getTimeZoneName() Get timeZoneName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsActive()
 * setIsActive(integer $value) Set isActive attribute. Provides a fluent interface.
 * @method integer getIsActive getIsActive() Get isActive attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeCity()
 * setHomeCity(string $value) Set homeCity attribute. Provides a fluent interface.
 * @method string getHomeCity getHomeCity() Get homeCity attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeFullAddress()
 * setHomeFullAddress(string $value) Set homeFullAddress attribute. Provides a
 * fluent interface.
 * @method string getHomeFullAddress getHomeFullAddress() Get homeFullAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeNumber()
 * setHomeNumber(string $value) Set homeNumber attribute. Provides a fluent
 * interface.
 * @method string getHomeNumber getHomeNumber() Get homeNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeNumberSuffix()
 * setHomeNumberSuffix(string $value) Set homeNumberSuffix attribute. Provides a
 * fluent interface.
 * @method string getHomeNumberSuffix getHomeNumberSuffix() Get homeNumberSuffix
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomePostalCode()
 * setHomePostalCode(string $value) Set homePostalCode attribute. Provides a fluent
 * interface.
 * @method string getHomePostalCode getHomePostalCode() Get homePostalCode
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setHomeStreet()
 * setHomeStreet(string $value) Set homeStreet attribute. Provides a fluent
 * interface.
 * @method string getHomeStreet getHomeStreet() Get homeStreet attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativeCity()
 * setAlternativeCity(string $value) Set alternativeCity attribute. Provides a
 * fluent interface.
 * @method string getAlternativeCity getAlternativeCity() Get alternativeCity
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativeFullAddress()
 * setAlternativeFullAddress(string $value) Set alternativeFullAddress attribute.
 * Provides a fluent interface.
 * @method string getAlternativeFullAddress getAlternativeFullAddress() Get
 * alternativeFullAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativeNumber()
 * setAlternativeNumber(string $value) Set alternativeNumber attribute. Provides a
 * fluent interface.
 * @method string getAlternativeNumber getAlternativeNumber() Get alternativeNumber
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativeNumberSuffix()
 * setAlternativeNumberSuffix(string $value) Set alternativeNumberSuffix attribute.
 * Provides a fluent interface.
 * @method string getAlternativeNumberSuffix getAlternativeNumberSuffix() Get
 * alternativeNumberSuffix attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativePostalCode()
 * setAlternativePostalCode(string $value) Set alternativePostalCode attribute.
 * Provides a fluent interface.
 * @method string getAlternativePostalCode getAlternativePostalCode() Get
 * alternativePostalCode attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAlternativeStreet()
 * setAlternativeStreet(string $value) Set alternativeStreet attribute. Provides a
 * fluent interface.
 * @method string getAlternativeStreet getAlternativeStreet() Get alternativeStreet
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsEmailInConfidential()
 * setIsEmailInConfidential(integer $value) Set isEmailInConfidential attribute.
 * Provides a fluent interface.
 * @method integer getIsEmailInConfidential getIsEmailInConfidential() Get
 * isEmailInConfidential attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMailboxSettings()
 * setMailboxSettings(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * mailboxSettings attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getMailboxSettings
 * getMailboxSettings() Get mailboxSettings attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUrl() setUrl(string
 * $value) Set url attribute. Provides a fluent interface.
 * @method string getUrl getUrl() Get url attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsEmailOutConfidential()
 * setIsEmailOutConfidential(integer $value) Set isEmailOutConfidential attribute.
 * Provides a fluent interface.
 * @method integer getIsEmailOutConfidential getIsEmailOutConfidential() Get
 * isEmailOutConfidential attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setFullFirstNames()
 * setFullFirstNames(string $value) Set fullFirstNames attribute. Provides a fluent
 * interface.
 * @method string getFullFirstNames getFullFirstNames() Get fullFirstNames
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserBonuses()
 * setUserBonuses(Carerix_Api_Rest_DataType_NSArray|array $value) Set userBonuses
 * attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSArray|array getUserBonuses getUserBonuses()
 * Get userBonuses attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setSofiNumber()
 * setSofiNumber(string $value) Set sofiNumber attribute. Provides a fluent
 * interface.
 * @method string getSofiNumber getSofiNumber() Get sofiNumber attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setGoals()
 * setGoals(Carerix_Api_Rest_DataType_NSArray|array $value) Set goals attribute.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSArray|array getGoals getGoals() Get goals
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPromoText()
 * setPromoText(string $value) Set promoText attribute. Provides a fluent
 * interface.
 * @method string getPromoText getPromoText() Get promoText attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setState()
 * setState(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set state
 * attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getState getState() Get
 * state attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAdditionalInfo()
 * setAdditionalInfo(Carerix_Api_Rest_DataType_NSDictionary|array $value) Set
 * additionalInfo attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfo
 * getAdditionalInfo() Get additionalInfo attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAdditionalInfoPartial()
 * setAdditionalInfoPartial(Carerix_Api_Rest_DataType_NSDictionary|array $value)
 * Set additionalInfoPartial attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSDictionary|array getAdditionalInfoPartial
 * getAdditionalInfoPartial() Get additionalInfoPartial attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPasswordHash()
 * setPasswordHash(string $value) Set passwordHash attribute. Provides a fluent
 * interface.
 * @method string getPasswordHash getPasswordHash() Get passwordHash attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setPreviewDelay()
 * setPreviewDelay(integer $value) Set previewDelay attribute. Provides a fluent
 * interface.
 * @method integer getPreviewDelay getPreviewDelay() Get previewDelay attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setEncryptedPassword()
 * setEncryptedPassword(string $value) Set encryptedPassword attribute. Provides a
 * fluent interface.
 * @method string getEncryptedPassword getEncryptedPassword() Get encryptedPassword
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setEmailNotificationPopup()
 * setEmailNotificationPopup(integer $value) Set emailNotificationPopup attribute.
 * Provides a fluent interface.
 * @method integer getEmailNotificationPopup getEmailNotificationPopup() Get
 * emailNotificationPopup attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setVisitAddressUseCompanyVisitAddress()
 * setVisitAddressUseCompanyVisitAddress(integer $value) Set
 * visitAddressUseCompanyVisitAddress attribute. Provides a fluent interface.
 * @method integer getVisitAddressUseCompanyVisitAddress
 * getVisitAddressUseCompanyVisitAddress() Get visitAddressUseCompanyVisitAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setAddressUseCompanyMailingAddress() setAddressUseCompanyMailingAddress(integer
 * $value) Set addressUseCompanyMailingAddress attribute. Provides a fluent
 * interface.
 * @method integer getAddressUseCompanyMailingAddress
 * getAddressUseCompanyMailingAddress() Get addressUseCompanyMailingAddress
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setMultiRoleUserID()
 * setMultiRoleUserID(integer $value) Set multiRoleUserID attribute. Provides a
 * fluent interface.
 * @method integer getMultiRoleUserID getMultiRoleUserID() Get multiRoleUserID
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setRoleName()
 * setRoleName(string $value) Set roleName attribute. Provides a fluent interface.
 * @method string getRoleName getRoleName() Get roleName attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIndicationColor()
 * setIndicationColor(string $value) Set indicationColor attribute. Provides a
 * fluent interface.
 * @method string getIndicationColor getIndicationColor() Get indicationColor
 * attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsMasterUser()
 * setIsMasterUser(integer $value) Set isMasterUser attribute. Provides a fluent
 * interface.
 * @method integer getIsMasterUser getIsMasterUser() Get isMasterUser attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setIsOutOfOfficeForward()
 * setIsOutOfOfficeForward(integer $value) Set isOutOfOfficeForward attribute.
 * Provides a fluent interface.
 * @method integer getIsOutOfOfficeForward getIsOutOfOfficeForward() Get
 * isOutOfOfficeForward attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setOutOfOfficeForwardAddress() setOutOfOfficeForwardAddress(string $value) Set
 * outOfOfficeForwardAddress attribute. Provides a fluent interface.
 * @method string getOutOfOfficeForwardAddress getOutOfOfficeForwardAddress() Get
 * outOfOfficeForwardAddress attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAdditionalAgenciesIDs()
 * setAdditionalAgenciesIDs(Carerix_Api_Rest_DataType_NSArray|array $value) Set
 * additionalAgenciesIDs attribute. Provides a fluent interface.
 * @method Carerix_Api_Rest_DataType_NSArray|array getAdditionalAgenciesIDs
 * getAdditionalAgenciesIDs() Get additionalAgenciesIDs attribute.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setGroups()
 * setGroups(array|Carerix_Api_Rest_Collection $values) Set groups relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode getGroups
 * getGroups() Get groups relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToStatusNode()
 * setToStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToStatusNode
 * getToStatusNode($index = null) Get toStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToDos()
 * setToDos(array|Carerix_Api_Rest_Collection $values) Set toDos relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRToDo getToDos
 * getToDos() Get toDos relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setJobs()
 * setJobs(array|Carerix_Api_Rest_Collection $values) Set jobs relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRJob getJobs
 * getJobs() Get jobs relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToCompany()
 * setToCompany(array|Carerix_Api_Rest_Entity_CRCompany $value) Set toCompany
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToCompany getToCompany($index =
 * null) Get toCompany relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setVacancies()
 * setVacancies(array|Carerix_Api_Rest_Collection $values) Set vacancies
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRVacancy
 * getVacancies getVacancies() Get vacancies relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setClients()
 * setClients(array|Carerix_Api_Rest_Collection $values) Set clients relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUser getClients
 * getClients() Get clients relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAccounts()
 * setAccounts(array|Carerix_Api_Rest_Collection $values) Set accounts
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRCompany
 * getAccounts getAccounts() Get accounts relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setCreatedBy()
 * setCreatedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set createdBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getCreatedBy getCreatedBy($index = null)
 * Get createdBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setModifiedBy()
 * setModifiedBy(array|Carerix_Api_Rest_Entity_CRUser $value) Set modifiedBy
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getModifiedBy getModifiedBy($index =
 * null) Get modifiedBy relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setSingleOwner()
 * setSingleOwner(array|Carerix_Api_Rest_Entity_CRUser $value) Set singleOwner
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getSingleOwner getSingleOwner($index =
 * null) Get singleOwner relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAgency()
 * setAgency(array|Carerix_Api_Rest_Entity_CRAgency $value) Set agency
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRAgency getAgency getAgency($index = null) Get
 * agency relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAttachments()
 * setAttachments(array|Carerix_Api_Rest_Collection $values) Set attachments
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttachment
 * getAttachments getAttachments() Get attachments relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToProvinceNode()
 * setToProvinceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProvinceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProvinceNode
 * getToProvinceNode($index = null) Get toProvinceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToSingleStatusNode()
 * setToSingleStatusNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSingleStatusNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSingleStatusNode
 * getToSingleStatusNode($index = null) Get toSingleStatusNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToFunctionNode()
 * setToFunctionNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toFunctionNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToFunctionNode
 * getToFunctionNode($index = null) Get toFunctionNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToLanguageNode()
 * setToLanguageNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toLanguageNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToLanguageNode
 * getToLanguageNode($index = null) Get toLanguageNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToProductNode()
 * setToProductNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toProductNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToProductNode
 * getToProductNode($index = null) Get toProductNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToGenderNode()
 * setToGenderNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toGenderNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToGenderNode
 * getToGenderNode($index = null) Get toGenderNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToCountryNode()
 * setToCountryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toCountryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToCountryNode
 * getToCountryNode($index = null) Get toCountryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToVisitCountryNode()
 * setToVisitCountryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toVisitCountryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToVisitCountryNode
 * getToVisitCountryNode($index = null) Get toVisitCountryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToVisitProvinceNode()
 * setToVisitProvinceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toVisitProvinceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToVisitProvinceNode
 * getToVisitProvinceNode($index = null) Get toVisitProvinceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToSourceNode()
 * setToSourceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSourceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSourceNode
 * getToSourceNode($index = null) Get toSourceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setStatuses()
 * setStatuses(array|Carerix_Api_Rest_Collection $values) Set statuses
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUserStatus
 * getStatuses getStatuses() Get statuses relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToTrialPeriodUnitNode()
 * setToTrialPeriodUnitNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toTrialPeriodUnitNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToTrialPeriodUnitNode
 * getToTrialPeriodUnitNode($index = null) Get toTrialPeriodUnitNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToSalutationNode()
 * setToSalutationNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSalutationNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSalutationNode
 * getToSalutationNode($index = null) Get toSalutationNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToDoUsers()
 * setToDoUsers(array|Carerix_Api_Rest_Collection $values) Set toDoUsers
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRToDoUser
 * getToDoUsers getToDoUsers() Get toDoUsers relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setEmployees()
 * setEmployees(array|Carerix_Api_Rest_Collection $values) Set employees
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREmployee
 * getEmployees getEmployees() Get employees relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setGroupNodes()
 * setGroupNodes(array|Carerix_Api_Rest_Collection $values) Set groupNodes
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRDataNode
 * getGroupNodes getGroupNodes() Get groupNodes relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToUser()
 * setToUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set toUser relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToUser getToUser($index = null) Get
 * toUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setEmailAddresses()
 * setEmailAddresses(array|Carerix_Api_Rest_Collection $values) Set emailAddresses
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CREmailAddress
 * getEmailAddresses getEmailAddresses() Get emailAddresses relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToUserRole()
 * setToUserRole(array|Carerix_Api_Rest_Entity_CRUserRole $value) Set toUserRole
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUserRole getToUserRole getToUserRole($index =
 * null) Get toUserRole relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserCompanies()
 * setUserCompanies(array|Carerix_Api_Rest_Collection $values) Set userCompanies
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUserCompany
 * getUserCompanies getUserCompanies() Get userCompanies relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToSmtpServerNode()
 * setToSmtpServerNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toSmtpServerNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToSmtpServerNode
 * getToSmtpServerNode($index = null) Get toSmtpServerNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToSupplier()
 * setToSupplier(array|Carerix_Api_Rest_Entity_CRCompany $value) Set toSupplier
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRCompany getToSupplier getToSupplier($index =
 * null) Get toSupplier relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToHomeCountryNode()
 * setToHomeCountryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toHomeCountryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToHomeCountryNode
 * getToHomeCountryNode($index = null) Get toHomeCountryNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToHomeProvinceNode()
 * setToHomeProvinceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toHomeProvinceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToHomeProvinceNode
 * getToHomeProvinceNode($index = null) Get toHomeProvinceNode relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToAlternativeCountryNode()
 * setToAlternativeCountryNode(array|Carerix_Api_Rest_Entity_CRDataNode $value) Set
 * toAlternativeCountryNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToAlternativeCountryNode
 * getToAlternativeCountryNode($index = null) Get toAlternativeCountryNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact
 * setToAlternativeProvinceNode()
 * setToAlternativeProvinceNode(array|Carerix_Api_Rest_Entity_CRDataNode $value)
 * Set toAlternativeProvinceNode relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRDataNode getToAlternativeProvinceNode
 * getToAlternativeProvinceNode($index = null) Get toAlternativeProvinceNode
 * relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUrls()
 * setUrls(array|Carerix_Api_Rest_Collection $values) Set urls relationship.
 * Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUrl getUrls
 * getUrls() Get urls relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAttributeChanges()
 * setAttributeChanges(array|Carerix_Api_Rest_Collection $values) Set
 * attributeChanges relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRAttributeChange
 * getAttributeChanges getAttributeChanges() Get attributeChanges relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToConfigProfile()
 * setToConfigProfile(array|Carerix_Api_Rest_Entity_CRConfigProfile $value) Set
 * toConfigProfile relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRConfigProfile getToConfigProfile
 * getToConfigProfile($index = null) Get toConfigProfile relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setToMultiRoleUser()
 * setToMultiRoleUser(array|Carerix_Api_Rest_Entity_CRUser $value) Set
 * toMultiRoleUser relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Entity_CRUser getToMultiRoleUser
 * getToMultiRoleUser($index = null) Get toMultiRoleUser relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setAdditionalRoles()
 * setAdditionalRoles(array|Carerix_Api_Rest_Collection $values) Set
 * additionalRoles relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRUser
 * getAdditionalRoles getAdditionalRoles() Get additionalRoles relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserLeads()
 * setUserLeads(array|Carerix_Api_Rest_Collection $values) Set userLeads
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRLeadUser
 * getUserLeads getUserLeads() Get userLeads relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserVacancies()
 * setUserVacancies(array|Carerix_Api_Rest_Collection $values) Set userVacancies
 * relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRVacancyUser
 * getUserVacancies getUserVacancies() Get userVacancies relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setUserOpportunities()
 * setUserOpportunities(array|Carerix_Api_Rest_Collection $values) Set
 * userOpportunities relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CROpportunityUser
 * getUserOpportunities getUserOpportunities() Get userOpportunities relationship.
 * @method Carerix_Api_Rest_Entity_Abstract_CRContact setTalentPoolUsers()
 * setTalentPoolUsers(array|Carerix_Api_Rest_Collection $values) Set
 * talentPoolUsers relationship. Provides a fluent interface.
 * @method Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity_CRTalentPoolUser
 * getTalentPoolUsers getTalentPoolUsers() Get talentPoolUsers relationship.
 */
abstract class Carerix_Api_Rest_Entity_Abstract_CRContact extends Carerix_Api_Rest_Entity
{

    const ENTITY = 'CRContact';

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $photo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $companyInformation = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $visitAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $address = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $contactID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $homeEmailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $businessEmailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $privateEmailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $businessOrPrivateEmailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $privateOrBusinessEmailAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $birthDay = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $hasPhoto = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $systemLanguage = null;

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
     * @allows_null 0
     */
    public $creationDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $firstName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       12
     */
    public $initials = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $lastName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $password = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $userName = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $wantsCookie = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $userID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $lastNamePrefix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $city = null;

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
    public $birthDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $houseNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $jobTitle = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $postalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $street = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $isNewUser = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       100
     */
    public $abbreviation = null;

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
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $houseNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $suffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $fullAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $exportID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $visitCity = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $visitNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $visitPostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $visitStreet = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $visitFullAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $visitNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $sourceInfo = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isLoginBlocked = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $forwardEmail = null;

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
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $trialPeriodAmount = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $conditionsInformation = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $faxNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $faxNumberBusiness = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $internalAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastContactDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $mobileNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $mobileNumberBusiness = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $organisationInformation = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $phoneNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $phoneNumberBusiness = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $title = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $userInformation = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenWorkActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $tokenWork = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenWorkValidUntilDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $tokenHome = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenHomeActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenHomeValidUntilDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $tokenRoad = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenRoadActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $tokenEmailAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isTbaActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $passwordValidUntilDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $outOfOfficeDate = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $mailboxURLString = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $mailboxDate = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $mailboxFlags = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $outOfOfficeText = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $timeZoneName = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isActive = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $homeCity = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $homeFullAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $homeNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $homeNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $homePostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $homeStreet = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $alternativeCity = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $alternativeFullAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $alternativeNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       10
     */
    public $alternativeNumberSuffix = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       30
     */
    public $alternativePostalCode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       60
     */
    public $alternativeStreet = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailInConfidential = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $mailboxSettings = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       100
     */
    public $url = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailOutConfidential = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $fullFirstNames = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $userBonuses = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $sofiNumber = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $goals = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $promoText = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $state = null;

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
     * @width       200
     */
    public $passwordHash = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $previewDelay = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       32
     */
    public $encryptedPassword = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $emailNotificationPopup = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $visitAddressUseCompanyVisitAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $addressUseCompanyMailingAddress = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
     * @value_type       i
     * @value_type_human long integer (32 bits)
     */
    public $multiRoleUserID = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $roleName = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       20
     */
    public $indicationColor = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isMasterUser = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isOutOfOfficeForward = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       255
     */
    public $outOfOfficeForwardAddress = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $additionalAgenciesIDs = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groups
     */
    public $groups = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRToDo")
     * @mandatory          0
     * @destination_entity CRToDo
     * @to_many            1
     * @name toDos
     */
    public $toDos = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRJob")
     * @mandatory          0
     * @destination_entity CRJob
     * @to_many            1
     * @name jobs
     */
    public $jobs = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            0
     * @name toCompany
     */
    public $toCompany = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRVacancy")
     * @mandatory          0
     * @destination_entity CRVacancy
     * @to_many            1
     * @name vacancies
     */
    public $vacancies = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            1
     * @name clients
     */
    public $clients = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            1
     * @name accounts
     */
    public $accounts = null;

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
     * @name singleOwner
     */
    public $singleOwner = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRAgency
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRAgency")
     * @mandatory          0
     * @destination_entity CRAgency
     * @to_many            0
     * @name agency
     */
    public $agency = null;

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProvinceNode
     * @default            1
     * @nodeType           Regio
     */
    public $toProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSingleStatusNode
     * @default            1
     * @nodeType           ${label}-status
     */
    public $toSingleStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toFunctionNode
     * @default            1
     * @nodeType           Contact-functie
     */
    public $toFunctionNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toLanguageNode
     * @default            1
     * @nodeType           Taal
     */
    public $toLanguageNode = null;

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
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toGenderNode
     * @default            1
     * @nodeType           Geslacht
     */
    public $toGenderNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toCountryNode
     * @default            1
     * @nodeType           Land
     */
    public $toCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toVisitCountryNode
     * @default            1
     * @nodeType           Land
     */
    public $toVisitCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toVisitProvinceNode
     * @default            1
     * @nodeType           Regio
     */
    public $toVisitProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSourceNode
     * @default
     * @nodeType           Bron-Contactpersoon
     */
    public $toSourceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUserStatus")
     * @mandatory          0
     * @destination_entity CRUserStatus
     * @to_many            1
     * @name statuses
     */
    public $statuses = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toTrialPeriodUnitNode
     * @default            1
     * @nodeType           Proeftijd-eenheid
     */
    public $toTrialPeriodUnitNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSalutationNode
     * @default            1
     * @nodeType           Aanspreekvorm
     */
    public $toSalutationNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRToDoUser")
     * @mandatory          0
     * @destination_entity CRToDoUser
     * @to_many            1
     * @name toDoUsers
     * @inverseName        toUser
     */
    public $toDoUsers = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREmployee")
     * @mandatory          0
     * @destination_entity CREmployee
     * @to_many            1
     * @name employees
     */
    public $employees = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toUser
     */
    public $toUser = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CREmailAddress")
     * @mandatory          0
     * @destination_entity CREmailAddress
     * @to_many            1
     * @name emailAddresses
     * @inverseName        toUser
     */
    public $emailAddresses = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUserRole
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUserRole")
     * @mandatory          0
     * @destination_entity CRUserRole
     * @to_many            0
     * @name toUserRole
     */
    public $toUserRole = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUserCompany")
     * @mandatory          0
     * @destination_entity CRUserCompany
     * @to_many            1
     * @name userCompanies
     */
    public $userCompanies = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toSmtpServerNode
     * @default            1
     * @nodeType           SMTP-server
     */
    public $toSmtpServerNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRCompany
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @mandatory          0
     * @destination_entity CRCompany
     * @to_many            0
     * @name toSupplier
     */
    public $toSupplier = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toHomeCountryNode
     * @default            1
     * @nodeType           Land
     */
    public $toHomeCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toHomeProvinceNode
     * @default            1
     * @nodeType           Regio
     */
    public $toHomeProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAlternativeCountryNode
     * @default            1
     * @nodeType           Land
     */
    public $toAlternativeCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toAlternativeProvinceNode
     * @default            1
     * @nodeType           Regio
     */
    public $toAlternativeProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUrl")
     * @mandatory          0
     * @destination_entity CRUrl
     * @to_many            1
     * @name urls
     */
    public $urls = null;

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
     * @var Carerix_Api_Rest_Entity_CRConfigProfile
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRConfigProfile")
     * @mandatory          0
     * @destination_entity CRConfigProfile
     * @to_many            0
     * @name toConfigProfile
     */
    public $toConfigProfile = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRUser
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toMultiRoleUser
     */
    public $toMultiRoleUser = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            1
     * @name additionalRoles
     */
    public $additionalRoles = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRLeadUser")
     * @mandatory          0
     * @destination_entity CRLeadUser
     * @to_many            1
     * @name userLeads
     */
    public $userLeads = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRVacancyUser")
     * @mandatory          0
     * @destination_entity CRVacancyUser
     * @to_many            1
     * @name userVacancies
     */
    public $userVacancies = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CROpportunityUser")
     * @mandatory          0
     * @destination_entity CROpportunityUser
     * @to_many            1
     * @name userOpportunities
     */
    public $userOpportunities = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Collection
     * @OneToMany (targetEntity="Carerix_Api_Rest_Entity_CRTalentPoolUser")
     * @mandatory          0
     * @destination_entity CRTalentPoolUser
     * @to_many            1
     * @name talentPoolUsers
     */
    public $talentPoolUsers = null;

    public static function configure(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("contactID");
        $entityConfiguration->setName("CRContact");
    }


}
