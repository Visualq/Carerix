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
 * @version   Fri, 23 Sep 2011 09:35:49 +0300
 *
 * @method Carerix_Api_Rest_Entity_CRUser setSyncmail()
 * setSyncmail(integer $value) Set syncmail attribute. Provides a
 * fluent interface.
 * @method string getSyncmail getSyncmail() Get syncmail
 * attribute
 * @method string getBusinessOrPrivateEmailAddress getBusinessOrPrivateEmailAddress() Get business or private email
 * attribute
 * @method string getPrimaryOrBusinessEmailAddress getPrimaryOrBusinessEmailAddress() - Gets primary or
 * if not defined business email attribute
 * @method string getPrimaryOrPrivateEmailAddress getPrimaryOrPrivateEmailAddress() - Gets primary or
 * if not defined private email attribute
 * @method string getPrimaryEmailAddress getPrimaryAddress() - Gets primary email attribute
 */
class Carerix_Api_Rest_Entity_CRUser extends Carerix_Api_Rest_Entity_Abstract_CRUser
{
    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      1
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
     * @width       1000000
     */
    public $photo = null;

    /**
     * @cx_field    true
     * @access      private
     * @var Carerix_Api_Rest_DataType_NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $photoList = null;

    /**
     * @cx_field    true
     * @access      private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     */
    public $userRoleID;

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
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     */
    public $lessFormalNameString;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $emailAddressPrivate;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $businessOrPrivateEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryOrBusinessEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryOrPrivateEmailAddress;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     */
    public $primaryEmailAddress;

    /**
     * @cx_field           true
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @access             private
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @nodeType           Kandidaat-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * Added for BC reasons.
     * @var Carerix_Api_Rest_Entity_Company
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRCompany")
     * @access   private
     */
    public $toCompany;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddressBusiness;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddress;

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
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toMailingCountryNode
     * @default
     * @nodeType           Land
     */
    public $toMailingCountryNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toMailingProvinceNode
     * @default
     * @nodeType           Regio
     */
    public $toMailingProvinceNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     */
    public $syncmail;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $mailboxType;

    /**
     * Gets userRoleID
     *
     * @return integer
     */
    public function getUserRoleID()
    {
        return $this->userRoleID;
    }

    /**
     * Sets userRoleID
     *
     * @param integer $userRoleID userRoleID
     *
     * @return self
     */
    public function setUserRoleID($userRoleID)
    {
        $this->userRoleID = $userRoleID;
        return $this;
    }

    /**
     * Get owner.
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set owner.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRUser $value
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     */
    public function setOwner($value)
    {
        if (is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }

    /**
     * Gets lessFormalNameString
     *
     * @return string
     */
    public function getLessFormalNameString()
    {
        return $this->lessFormalNameString;
    }

    /**
     * Sets lessFormalNameString
     *
     * @param string $lessFormalNameString lessFormalNameString
     *
     * @return self
     */
    public function setLessFormalNameString($lessFormalNameString)
    {
        $this->lessFormalNameString = $lessFormalNameString;
        return $this;
    }

    /**
     * Gets emailAddressPrivate
     *
     * @return string
     */
    public function getEmailAddressPrivate()
    {
        return $this->emailAddressPrivate;
    }

    /**
     * Sets emailAddressPrivate
     *
     * @param string $emailAddressPrivate emailAddressPrivate
     *
     * @return self
     */
    public function setEmailAddressPrivate($emailAddressPrivate)
    {
        $this->emailAddressPrivate = $emailAddressPrivate;
        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress emailAddress
     *
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Gets toCompany
     *
     * @return Carerix_Api_Rest_Entity_CRCompany
     */
    public function getToCompany()
    {
        return $this->toCompany;
    }

    /**
     * Sets toCompany
     *
     * @param array|Carerix_Api_Rest_Entity_CRCompany $toCompany toCompany
     *
     * @return self
     */
    public function setToCompany($toCompany)
    {
        if (is_array($toCompany)) {
            $toCompany = new Carerix_Api_Rest_Entity_CRCompany($toCompany);
        }
        $this->toCompany = $toCompany;
        return $this;
    }

    /**
     * Gets toStatusNode
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToStatusNode()
    {
        return $this->toStatusNode;
    }

    /**
     * Sets toStatusNode
     *
     * @param Carerix_Api_Rest_Entity_CRDataNode $toStatusNode toStatusNode
     *
     * @return self
     */
    public function setToStatusNode($toStatusNode)
    {
        $this->toStatusNode = $toStatusNode;
        return $this;
    }

    /**
     * Gets emailAddressBusiness
     *
     * @return string
     */
    public function getEmailAddressBusiness()
    {
        return $this->emailAddressBusiness;
    }

    /**
     * Sets emailAddressBusiness
     *
     * @param string $emailAddressBusiness emailAddressBusiness
     *
     * @return self
     */
    public function setEmailAddressBusiness($emailAddressBusiness)
    {
        $this->emailAddressBusiness = $emailAddressBusiness;
        return $this;
    }

    /**
     * Gets mailboxType
     *
     * @return string
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * Sets mailboxType
     *
     * @param string mailboxType mailboxType
     *
     * @return self
     */
    public function setMailboxType($mailboxType)
    {
        $this->mailboxType = $mailboxType;
        return $this;
    }

    /**
     * Set homeEmailAddress.
     *
     * Provides a fluent interface.
     *
     * @param string $value [optional]
     *
     * @return Carerix_Api_Rest_Entity_Abstract_CRContact
     */
    public function setHomeEmailAddress($value)
    {
        $this->homeEmailAddress = $value;
        return $this;
    }

    /**
     * Get homeEmailAddress.
     *
     * @return string
     */
    public function getHomeEmailAddress()
    {
        return $this->homeEmailAddress;
    }

    /**
     * Set toMailingCountryNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_CRCompany
     */
    public function setToMailingCountryNode($value)
    {
        if (is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toMailingCountryNode = $value;
        return $this;
    }

    /**
     * Get toMailingCountryNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToMailingCountryNode()
    {
        return $this->toMailingCountryNode;
    }

    /**
     * Set toMailingProvinceNode.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_CRAgency
     */
    public function setToMailingProvinceNode($value)
    {
        if (is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toMailingProvinceNode = $value;
        return $this;
    }

    /**
     * Get toMailingProvinceNode.
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToMailingProvinceNode()
    {
        return $this->toMailingProvinceNode;
    }

    /**
     * Get a list of meetings for a given user.
     *
     * @param array   $parameters [optional] e.g. array('startDate' => '-30 days', 'endDate' => 'now')
     * @param integer $hydrate    [optional] hydration method
     *
     * @return Carerix_Api_Rest_Collection
     */
    public function meeting($parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        switch (count($args)) {
            case 1:
                if (!is_array($args[0])) {
                    $parameters = [];
                    $hydrate = $args[0];
                }
                break;
        }

        if (!$this->getId()) {
            throw new Carerix_Api_Rest_Exception('Please load the object from the REST API first or set id.');
        }
        $parameters = array_merge((array)$parameters, ['userID' => $this->getId()]);
        $get_called_class = get_class($this);
        $action = 'meeting';
        return self::$_manager->execute(
            'Carerix_Api_Rest_Entity_CRToDo',
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Get a list of meetings for a given user.
     *
     * This is an improved version of meetings.xml.
     *
     * @param array   $parameters [optional] e.g. array('startDate' => '-30 days', 'endDate' => 'now')
     * @param integer $hydrate    [optional] hydration method
     *
     * @return Carerix_Api_Rest_Collection
     */
    public function meeting2($parameters = null, $hydrate = null)
    {
        $args = func_get_args();
        switch (count($args)) {
            case 1:
                if (!is_array($args[0])) {
                    $parameters = [];
                    $hydrate = $args[0];
                }
                break;
        }

        if (!$this->getId()) {
            throw new Carerix_Api_Rest_Exception('Please load the object from the REST API first or set id.');
        }
        $parameters = array_merge((array)$parameters, ['user' => $this->getId()]);
        $get_called_class = get_class($this);
        $action = 'meeting2';
        return self::$_manager->execute(
            'Carerix_Api_Rest_Entity_CRToDo',
            $this->generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Get user object by auth.
     *
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     *
     * @see    http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_user.2Fget-by-auth
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function getByAuth(array $parameters, $hydrate = null)
    {
        $action = 'get-by-auth';
        $get_called_class = get_called_class();
        return self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Get user object by username and hash.
     *
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     *
     * @see    http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods#GET_user.2Fget-by-username-and-hash
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function getByUsernameAndHash(array $parameters, $hydrate = null)
    {
        $action = 'get-by-username-and-hash';
        $get_called_class = get_called_class();
        return self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Get user object by username and encrypted password.
     *
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     *
     * @see    http://development.wiki.carerix.com/cxwiki/doku.php?id=cxrest_api_methods
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public static function loginWithEncryptedPassword(array $parameters, $hydrate = null)
    {
        $action = 'login-with-encrypted-password';
        $get_called_class = get_called_class();
        return self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );
    }

    /**
     * Get user token and id by userName,password or encryptedPassword, systemName and type.
     * If you specify HYDRATE_NONE as hydration method be sure to take care of the
     * scenario when multiple user tokens might be returned for same user if she
     * has duplicate Notes in the system.
     *
     * @param string  $action
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return mixed xml|array
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    private static function doGetTokenStatic($action, array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!in_array($hydrate, [self::HYDRATE_NONE, self::HYDRATE_ARRAY])) {
            throw new Carerix_Api_Rest_Exception('Unsupported hydration mode for ' . __METHOD__);
        }
        $get_called_class = get_called_class();
        $result = self::$_manager->execute(
            $get_called_class,
            self::generateUrl(get_defined_vars(), $get_called_class),
            Carerix_Api_Rest_Client::GET,
            null,
            null,
            $hydrate
        );

        // [AY] special logic to deal with multiple user tokens if duplicate notes exist in user's account
        if ($hydrate == self::HYDRATE_ARRAY) {
            if (isset($result['debug'])) {
                unset($result['debug']);
            }
            if (isset($result['token']) && is_array($result['token'])) {
                $result['token'] = array_shift($result['token']);
            }
        }

        return $result;
    }

    /**
     * @see doGetTokenStatic
     */
    public static function getTokenStatic(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        return self::doGetTokenStatic('get-token', $parameters, $hydrate);
    }

    /**
     * @see doGetTokenStatic
     */
    public static function getTokenStaticUsingEncryptedPassword(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        return self::doGetTokenStatic('get-token-using-encrypted-password', $parameters, $hydrate);
    }

    /**
     * Get user token and id by systemName and type.
     *
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return mixed xml|array
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getToken(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!$this->getUserName() || !$this->getPassword()) {
            throw new Carerix_Api_Rest_Exception(
                'Please load the object from the REST API first or set userName and password before calling this method.'
            );
        }
        $parameters = array_merge(
            $parameters,
            ['userName' => $this->getUserName(), 'password' => $this->getPassword()]
        );
        return Carerix_Api_Rest_Entity_CRUser::getTokenStatic($parameters, $hydrate);
    }

    /**
     * Get user token and id by systemName and type using encryptedPassword
     *
     * @param array   $parameters
     * @param integer $hydrate [optional] hydration method
     *
     * @return mixed xml|array
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getTokenUsingEncryptedPassword(array $parameters, $hydrate = self::HYDRATE_ARRAY)
    {
        if (!$this->getUserName() || !$this->getEncryptedPassword()) {
            throw new Carerix_Api_Rest_Exception(
                'Please load the object from the REST API first or set userName and encryptedPassword before calling this method.'
            );
        }
        $parameters = array_merge(
            $parameters,
            [
                'userName' => $this->getUserName(),
                'encryptedPassword' => $this->getEncryptedPassword(),
            ]
        );
        return Carerix_Api_Rest_Entity_CRUser::getTokenStaticUsingEncryptedPassword($parameters, $hydrate);
    }

    /**
     * (non-PHPdoc)
     *
     * @return Carerix_Api_Rest_Entity_CRUser
     * @see Carerix_Api_Rest_Entity::subscribe()
     */
    /**
     * (non-PHPdoc)
     *
     * @return Carerix_Api_Rest_Entity_Employee
     * @see Carerix_Api_Rest_Entity::subscribe()
     */
    public function subscribe()
    {
        $args = func_get_args();
        return call_user_func_array(['parent', 'subscribe'], $args);
    }
}
