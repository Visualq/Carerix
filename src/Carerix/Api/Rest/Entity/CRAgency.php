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
 * @category Carerix
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @copyright Copyright (c) 2020 Carerix.com (http://www.carerix.com)
 * @license http://www.opensource.org/licenses/lgpl-license.php  LGPL
 * @link http://www.carerix.com
 * @version 2020-03-27 16:24:40Z
 */
 
/**
 * @category Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link http://www.carerix.com
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version Fri, 23 Sep 2011 10:19:36 +0300
 */
class Carerix_Api_Rest_Entity_CRAgency extends Carerix_Api_Rest_Entity_Abstract_CRAgency
{
    /**
     * @cx_field true
     * @access private
     * @var Carerix_Api_Rest_Entity_CRDataNode
     * @OneToOne (targetEntity="Carerix_Api_Rest_Entity_CRDataNode")
     * @mandatory ?
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel1
     * @default 
     * @nodeType 
     */
    public $toFunctionLevel1 = null;
    
    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $invoiceCompanyName;
    
    /**
     * Gets invoiceCompanyName
     *
     * @return string
     */
    public function getInvoiceCompanyName() 
    {
        return $this->invoiceCompanyName;
    }
    
    /**
     * Sets invoiceCompanyName
     *
     * @param string $value
     * @return Carerix_Api_Rest_Entity_CRAgency
     */
    public function setInvoiceCompanyName($value) 
    {
        $this->invoiceCompanyName = $value;
        return $this;
    }
    
    /**
     * Gets toFunctionLevel1
     *
     * @return Carerix_Api_Rest_Entity_CRDataNode
     */
    public function getToFunctionLevel1() 
    {
        return $this->toFunctionLevel1;
    }
    
    /**
     * Sets toFunctionLevel1
     *
     * @param array|Carerix_Api_Rest_Entity_CRDataNode $value
     * @return Carerix_Api_Rest_Entity_CRAgency
     */
    public function setToFunctionLevel1($value) 
    {
        if(is_array($value)) {
            $value = new Carerix_Api_Rest_Entity_CRDataNode($value);
        }
        $this->toFunctionLevel1 = $value;
        return $this;
    }
}