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
 * Class that represents a request to a REST service through the raw HTTP client.
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */
class Carerix_Api_Rest_Request
{
    private $_url;
    private $_method = Carerix_Api_Rest_Client::GET;
    private $_parameters = [];
    private $_username;
    private $_password;
    private $_responseType = 'xml';
    private $_responseTransformerImpl;

    /**
     * @var string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    private $_proxy;

    /**
     * @var string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    private $_body;

    /**
     * @param string $proxy
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function setProxy($proxy)
    {
        $this->_proxy = $proxy;
        return $this;
    }

    /**
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getProxy()
    {
        return $this->_proxy;
    }

    /**
     * @param string $body
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function setBody($body)
    {
        $this->_body = $body;
        return $this;
    }

    /**
     * @return string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getBody()
    {
        return $this->_body;
    }

    public function setUrl($url)
    {
        $this->_url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function setMethod($method)
    {
        $this->_method = $method;
        return $this;
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function setParameters($parameters)
    {
        $this->_parameters = $parameters;
        return $this;
    }

    public function getParameters()
    {
        return $this->_parameters;
    }

    public function setResponseType($responseType)
    {
        $this->_responseType = $responseType;
        return $this;
    }

    public function getResponseType()
    {
        return $this->_responseType;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set response transformer implementation.
     *
     * @param Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer $responseTransformerImpl
     *
     * @return void
     */
    public function setResponseTransformerImpl(
        Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer $responseTransformerImpl
    ) {
        $this->_responseTransformerImpl = $responseTransformerImpl;
        return $this;
    }

    /**
     * Get response transformer implementation.
     *
     * @return Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer
     */
    public function getResponseTransformerImpl()
    {
        return $this->_responseTransformerImpl;
    }
}
