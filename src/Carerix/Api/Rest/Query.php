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
class Carerix_Api_Rest_Query
{

    /**
     * Converts array into ordering string.
     *
     * @param array $params e.g. array('creationDate' => 'Descending')
     *
     * @return string e.g. ({key=creationDate;sel=Descending})
     */
    public static function ordering(array $params)
    {
        if (empty($params)) {
            return '';
        }
        $array = [];
        foreach ($params as $k => $v) {
            $array[] = '{key=' . $k . ';sel=' . ucfirst(strtolower($v)) . '}';
        }
        return '(' . implode(',', $array) . ')';
    }

    /**
     * Converts args into qualifier string
     *
     * @param array $args
     * @param array $parts
     *
     * @return string
     */
    public static function argsToSql($args, $parts)
    {
        $sql = [];
        foreach ($parts as $k => $v) {
            $sql[] = $v . ' = ' . self::quoteSql($args[$k]);
        }
        return $sql;
    }

    /**
     * Escape qualifier value
     *
     * @param mixed $v
     *
     * @return string
     */
    public static function quoteSql($v)
    {
        if (is_int($v)) {
            $sql = $v;
        } else {
            $sql = '"' . $v . '"';
        }

        return $sql;
    }
}
