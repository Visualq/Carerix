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

/**
 * The format is
 * [<length>-:<set-bits>]
 * where <set-bits> is a comma-separated list of bits numbers or number ranges.
 *
 * Examples:
 * [8-:1,3,5] => 8 bits total; bits 1, 3, and 5 are set.
 * [8-:2-4,7] => 8 bits total; bits 2, 3, 4, and 7 are set.
 *
 * @author Andrey Yakubovskiy
 */
class Carerix_Api_Rest_DataType_PRBitVector
{

    const DATA_TYPE = 'PRBitVector';

    /**
     * length
     *
     * @var integer
     */
    protected $length;

    /**
     * Gets length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets length
     *
     * @param integer $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->length = (int)$length;
        return $this;
    }

    /**
     * bits
     *
     * @var string
     */
    protected $bits;

    /**
     * Gets bits
     *
     * @return string
     */
    public function getBits()
    {
        return $this->bits;
    }

    /**
     * Sets bits
     *
     * @param string $bits bits
     *
     * @return self
     */
    public function setBits($bits)
    {
        $this->bits = (string)$bits;
        return $this;
    }

    /**
     * @param integer $length [optional]
     * @param string  $bits   [optional]
     */
    public function __construct($length = null, $bits = null)
    {
        if ($length !== null) {
            $this->setLength($length);
        }
        if ($bits !== null) {
            $this->setBits($bits);
        }
    }

    /**
     *
     * @return string
     */
    public function toString()
    {
        return '[' . $this->length . '-' . $this->bits . ']';
    }


    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}
