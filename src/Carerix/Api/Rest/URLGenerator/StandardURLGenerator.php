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

/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
*/

/**
 * Standard REST request URL generator
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */

/**
 * Port to PHP 5.2
 *
 * @author        Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_URLGenerator_StandardURLGenerator extends Carerix_Api_Rest_URLGenerator_AbstractURLGenerator
{
    public function generate(array $options)
    {
        $id = isset($options['id']) ? $options['id'] : null;
        $action = isset($options['action']) ? $options['action'] : null;
        $parameters = isset($options['parameters']) ? $options['parameters'] : [];

        if ($id) {
            if ($action !== null) {
                $path = sprintf('/%s/%s.' . $this->_entityConfiguration->getResponseType(), $id, $action);
            } else {
                $path = sprintf('/%s.' . $this->_entityConfiguration->getResponseType(), $id);
            }
        } else {
            if ($action !== null) {
                $path = sprintf('/%s.' . $this->_entityConfiguration->getResponseType(), $action);
            } else {
                $path = '.' . $this->_entityConfiguration->getResponseType();
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
