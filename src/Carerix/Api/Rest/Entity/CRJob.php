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
 * @version   Fri, 23 Sep 2011 10:20:57 +0300
 */
class Carerix_Api_Rest_Entity_CRJob extends Carerix_Api_Rest_Entity_Abstract_CRJob
{
    /**
     * alias for _flags setter
     */
    public function setFlags($value)
    {
        return $this->set_flags($value);
    }

    /**
     * alias for _flags getter
     */
    public function getFlags()
    {
        return $this->get_flags();
    }

    /**
     * alias for _todos setter
     */
    public function setTodos($values)
    {
        return $this->set_todos($values);
    }

    /**
     * alias for _todos getter
     */
    public function getTodos()
    {
        return $this->get_todos();
    }
}
