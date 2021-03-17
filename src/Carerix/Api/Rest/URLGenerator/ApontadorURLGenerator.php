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
 * Apontador REST request URL generator
 *
 * @author      Alexandre Eher <alexandre@eher.com.br>
 */

/**
 * Port to PHP 5.2
 *
 * @author        Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_URLGenerator_ApontadorURLGenerator extends Carerix_Api_Rest_URLGenerator_AbstractURLGenerator
{
    public function generate(array $options)
    {
        $id = isset($options['id']) ? $options['id'] : null;
        $action = isset($options['action']) ? $options['action'] : null;
        $parameters = isset($options['parameters']) ? $options['parameters'] : [];

        $parameters['type'] = $this->_entityConfiguration->getResponseType();
        if ($id) {
            if ($action !== null) {
                $path = sprintf('/%s/%s', $id, $action);
            } else {
                $path = sprintf('/%s', $id);
            }
        } else {
            if ($action !== null) {
                $path = sprintf('/%s', $action);
            } else {
                $path = '';
            }
        }
        $url = $this->_entityConfiguration->getUrl() . '/' . $this->_entityConfiguration->getName() . $path;
        if (is_array($parameters) && $parameters) {
            foreach ($this->_entityConfiguration->getProperties() as $field) {
                unset($parameters[$field]);
            }
            if ($parameters) {
                $url .= '?' . http_build_query($parameters);
            }
        }
        return $url;
    }
}
