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
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
interface Carerix_Api_Rest_DataType_Interface
{
    const XML_ELEMENT_NAME_REGEX = '/\A(?!XML)[a-z][\w0-9-]*/i';

    public static function fromArray($array);

    public function toArray();

    public function toSimpleXMLElement(&$sxe = null);
}
