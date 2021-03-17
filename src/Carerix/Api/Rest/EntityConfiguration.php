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

if (!class_exists('Carerix_Api_Rest_URLGenerator_StandardURLGenerator')) {
    require_once 'Carerix/Api/Rest/URLGenerator/StandardURLGenerator.php';
}

if (!class_exists('Carerix_Api_Rest_ResponseTransformer_StandardResponseTransformer')) {
    require_once 'Carerix/Api/Rest/ResponseTransformer/StandardResponseTransformer.php';
}

/**
 * Entity configuration class holds all the configuration information for a PHP5
 * object entity that maps to a REST service.
 *
 * @license        http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link           www.doctrine-project.org
 * @since          2.0
 * @version        $Revision$
 * @author         Jonathan H. Wage <jonwage@gmail.com>
 * @author         Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_EntityConfiguration
{
    /**
     * @var object
     */
    private $_prototype;

    /**
     * @var ReflectionClass
     */
    private $_reflection;

    /**
     * @var array
     */
    private $_properties = [];

    /**
     * @var array
     */
    private $_reflectionProperties = [];

    /**
     * @var array
     */
    private $_attributes = [
        'class' => null,
        'url' => null,
        'name' => null,
        'username' => null,
        'password' => null,
        'identifierKey' => 'id',
        'responseType' => 'xml',
        'urlGeneratorImpl' => null,
        'responseTransformerImpl' => null,
        'proxy' => null,
    ];

    /**
     * Constructor
     *
     * @param string $class
     *
     * @return void
     */
    public function __construct($class)
    {
        $this->_attributes['class'] = $class;
        $this->_attributes['urlGeneratorImpl'] = new Carerix_Api_Rest_URLGenerator_StandardURLGenerator($this);
        $this->_attributes['responseTransformerImpl'] = new Carerix_Api_Rest_ResponseTransformer_StandardResponseTransformer(
            $this
        );

        $this->_reflection = new ReflectionClass($class);
        foreach ($this->_reflection->getProperties() as $property) {
            // Entity_* direct child of Entity class
//            if ($property->getDeclaringClass()->getName() == $class) {
            $declaringClass = $property->getDeclaringClass()->getName();
            if ($declaringClass == $class || stripos($declaringClass, '_Abstract_')) {
                // not compatible with PHP 5.2, hence all properties are declared as public for now
//                $property->setAccessible(true);
                $this->_reflectionProperties[$property->getName()] = $property;
                $this->_properties[] = $property->getName();
            }
        }
    }

    /**
     * @return ReflectionClass
     */
    public function getReflection()
    {
        return $this->_reflection;
    }

    public function getReflectionProperties()
    {
        return $this->_reflectionProperties;
    }

    public function getProperties()
    {
        return $this->_properties;
    }

    /**
     * Set value.
     *
     * @param Carerix_Api_Rest_Entity $entity
     * @param string                  $field
     * @param mixed                   $value
     *
     * @return void
     */
    public function setValue(Carerix_Api_Rest_Entity $entity, $field, $value)
    {
        if (array_key_exists($field, $this->_reflectionProperties)) {
            $this->_reflectionProperties[$field]->setValue($entity, $value);
        } else {
            $entity->$field = $value;
        }
    }

    /**
     * Get value.
     *
     * @param Carerix_Api_Rest_Entity $entity
     * @param string                  $field
     *
     * @return mixed null if the field doesn't exist
     */
    public function getValue(Carerix_Api_Rest_Entity $entity, $field)
    {
        if (array_key_exists($field, $this->_reflectionProperties)) {
            return $this->_reflectionProperties[$field]->getValue($entity);
        }
        return null;
    }

    public function generateUrl(array $options)
    {
        return $this->_attributes['urlGeneratorImpl']->generate($options);
    }

    /**
     *
     * @param string $proxy
     *
     * @author Andrey Yakubovskiy
     */
    public function setProxy($proxy)
    {
        $this->_attributes['proxy'] = $proxy;
        return $this;
    }

    /**
     *
     * @return string
     * @author Andrey Yakubovskiy
     */
    public function getProxy()
    {
        return $this->_attributes['proxy'];
    }

    public function setUrl($url)
    {
        $this->_attributes['url'] = rtrim($url, '/');
        return $this;
    }

    public function getUrl()
    {
        return $this->_attributes['url'];
    }

    public function setClass($class)
    {
        $this->_attributes['class'] = $class;
        return $this;
    }

    public function getClass()
    {
        return $this->_attributes['class'];
    }

    public function setName($name)
    {
        $this->_attributes['name'] = $name;
        return $this;
    }

    public function getName()
    {
        return $this->_attributes['name'];
    }

    public function setUsername($username)
    {
        $this->_attributes['username'] = $username;
        return $this;
    }

    public function getUsername()
    {
        return $this->_attributes['username'];
    }

    public function setPassword($password)
    {
        $this->_attributes['password'] = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->_attributes['password'];
    }

    public function setIdentifierKey($identifierKey)
    {
        $this->_attributes['identifierKey'] = $identifierKey;
        return $this;
    }

    public function getIdentifierKey()
    {
        return $this->_attributes['identifierKey'];
    }

    public function setResponseType($responseType)
    {
        $this->_attributes['responseType'] = $responseType;
        return $this;
    }

    public function getResponseType()
    {
        return $this->_attributes['responseType'];
    }

    public function setURLGeneratorImpl($urlGeneratorImpl)
    {
        $this->_attributes['urlGeneratorImpl'] = $urlGeneratorImpl;
        return $this;
    }

    public function getURLGeneratorImpl()
    {
        return $this->_attributes['urlGeneratorImpl'];
    }

    public function setResponseTransformerImpl($responseHandlerImpl)
    {
        $this->_attributes['responseTransformerImpl'] = $responseHandlerImpl;
        return $this;
    }

    public function getResponseTransformerImpl()
    {
        return $this->_attributes['responseTransformerImpl'];
    }

    public function newInstance()
    {
        if ($this->_prototype === null) {
            $this->_prototype = unserialize(
                sprintf(
                    'O:%d:"%s":0:{}',
                    strlen($this->_attributes['class']),
                    $this->_attributes['class']
                )
            );
        }
        return clone $this->_prototype;
    }
}
