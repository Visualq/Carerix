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
class Carerix_Api_Rest_Token
{

    /**
     * Get REST API application token
     *
     * @param array                    $params  array('systemName' => $systemName, 'password' => $password)
     * @param Carerix_Api_Rest_Manager $manager [optional] allows you to configure HTTP client w/ custom options:
     *                                          endpoint, proxy, etc.
     *
     * @return string application token
     * @throws Carerix_Api_Rest_Exception
     */
    public static function get($params = [], Carerix_Api_Rest_Manager $manager = null)
    {
        $path = '/token/get?' . http_build_query($params);

        $request = new Carerix_Api_Rest_Request();
        if ($manager instanceof Carerix_Api_Rest_Manager) {
            $client = $manager->getClient();
        } else {
            $client = new Carerix_Api_Rest_Client();
            $manager = new Carerix_Api_Rest_Manager($client);
        }

        $request
            ->setUrl($manager->getUrl() . $path)
            ->setProxy($manager->getProxy());
        $result = $client->get($request);

        try {
            $xml = new SimpleXMLElement($result);
        } catch (Exception $ex) {
            throw new Carerix_Api_Rest_Exception('Unable to parse response.');
        }

        if (property_exists($xml, 'token')) {
            return $xml->token;
        }

        throw new Carerix_Api_Rest_Exception('Token was not found in the response.');
    }
}
