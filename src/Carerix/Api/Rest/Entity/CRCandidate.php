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
 * @version   Fri, 23 Sep 2011 10:21:13 +0300
 */
class Carerix_Api_Rest_Entity_CRCandidate extends Carerix_Api_Rest_Entity_Abstract_CRCandidate
{
    const ROLE_ID = 1;

    /**
     * Set toUserRole.
     *
     * Provides a fluent interface.
     *
     * @param array|Carerix_Api_Rest_Entity_User_Role $value
     *
     * @return Carerix_Api_Rest_Entity_Abstract_Recruiter
     */
    public function setToUserRole($value)
    {
        parent::setToUserRole($value);
        $this->toUserRole->setUserRoleID(self::ROLE_ID);
        return $this;
    }
}
