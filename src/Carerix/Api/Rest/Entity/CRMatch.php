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
 * @category  Carerix
 * @licence http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link      http://www.carerix.com
 * @copyright Copyright 2011 Carerix (http://www.carerix.com). All rights reserved.
 * @author    Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 * @version   Fri, 23 Sep 2011 10:20:57 +0300
 */
class Carerix_Api_Rest_Entity_CRMatch extends Carerix_Api_Rest_Entity_Abstract_CRMatch
{

    /**
     * @param Carerix_Api_Rest_DataType_NSArray|array $applyTags
     *
     * @return Carerix_Api_Rest_DataType_NSArray
     */
    public function setApplyTags($applyTags)
    {
        parent::setApplyTags($applyTags);

        if ($this->applyTags instanceof Carerix_Api_Rest_DataType_NSArray) {
            $this->applyTags->setSubElementName(
                $this->getAttributeValueByPropertyName( 'applyTags', 'xmlSubelementName' )
            );
        }

        return $this->applyTags;
    }
}