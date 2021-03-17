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
 * Class responsible for managing the entities registered for REST services.
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */

class Carerix_Api_Rest_Manager
{
    const COLLECTION_ROOT_ELEMENT = 'array';
    
    /**
     * @var Carerix_Api_Rest_Client
     */
    private $_client;
    
    /**
     * @var array
     */
    private $_entityConfigurations = array();
    
    /**
     * @var array
     */    
    private $_identityMap = array();

    /**
     * @var array
     */     
    private $_attributes = array(
        'url' => 'https://api.carerix.com',
        'username' => null,
        'password' => null,
        'identifierKey' => 'id',
        'responseType' => 'xml',
        'urlGeneratorImpl' => 'Carerix_Api_Rest_URLGenerator_StandardURLGenerator2',
        'responseTransformerImpl' => 'Carerix_Api_Rest_ResponseTransformer_CustomResponseTransformer',
        'proxy' => null,
    );
        
    /**
     * Constructor
     * 
     * @param Carerix_Api_Rest_Client $client
     * @return void
     */
    public function __construct(Carerix_Api_Rest_Client $client)
    {
        $this->_client = $client;

        // [AY] automatically configure the manager with built-in XML parser if running php 5.3+
        if(version_compare(PHP_VERSION, '5.3', '>=')) {
            $this->setResponseTransformerImpl('Carerix_Api_Rest_ResponseTransformer_CustomResponseTransformer2');
        }
    }

    /**
     * 
     * @return Carerix_Api_Rest_Client
     */
    public function getClient() {
        return $this->_client;
    }
    
    /**
     * Magic method impl.
     * 
     * @param string $method
     * @param array $args
     * @return mixed
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function __call($method, $args) {
        $key = substr($method, 3);
        $key = lcfirst($key);
        if(substr($method, 0, 3) === 'set') {
            $this->_attributes[$key] = $args[0];
            return $this;
        }
        else if(substr($method, 0, 3) === 'get') {
            if(array_key_exists($key, $this->_attributes)) {
                return $this->_attributes[$key];
            }
            return null;
        }            
    }
    
    /**
     * Register an entity
     * 
     * @param string $entity
     * @return void
     */
    public function registerEntity($entity)
    {
        $this->_entityConfigurations[$entity] = $entity;
    }
    
    /**
     * Register entities
     * 
     * @param array $entities
     * @return void
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function registerEntities($entities)
    {
        foreach($entities as $entity) {
            $this->registerEntity($entity);
        }
    }   

    /**
     * Automatically discover and register entities
     * 
     * @return void
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>      
     */
    public function autoDiscoverEntities() {
        $this->discoverEntitiesFromPath(dirname(__FILE__).'/Entity');
    }
    
    /**
     * Automatically discover and register entities within the specified path.
     * 
     * @param string $path location of entities
     * @param string $abstract [optional]
     * @return void
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function discoverEntitiesFromPath($path, $abstract = Carerix_Api_Rest_EntityGenerator::ABSTRACT_CLASS)
    {
        $abstractPath = str_replace('_', DIRECTORY_SEPARATOR, $abstract);
        $path = realpath($path);

        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::KEY_AS_PATHNAME));
        while($it->valid()) {
            if ($it->isFile() && 
                pathinfo($it->getRealPath(), PATHINFO_EXTENSION) == 'php' &&
                !preg_match('/'.preg_quote(DIRECTORY_SEPARATOR.'Abstract'.DIRECTORY_SEPARATOR, '/').'/', $it->getRealPath())
            ) {
                $file = $it->key();
                
                $entity = str_replace(DIRECTORY_SEPARATOR, '_', $file);
                $pos = strpos($entity, $abstract);
                $entity = substr($entity, $pos);
                $entity = pathinfo($entity, PATHINFO_FILENAME);
                
                 $this->registerEntity($entity);
            }
            $it->next();
        }
    }

    /**
     * Get entity configuration.
     * 
     * @param string $entity
     * @return Carerix_Api_Rest_EntityConfiguration
     * @throws InvalidArgumentException
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getEntityConfiguration($entity)
    {
        if ( ! isset($this->_entityConfigurations[$entity])) {
            throw new InvalidArgumentException(
                sprintf('Could not find entity configuration for "%s"', $entity)
            );
        }
        if (is_string($this->_entityConfigurations[$entity])) {
            $entityConfiguration = new Carerix_Api_Rest_EntityConfiguration($entity);
            $entityConfiguration->setUrl($this->getUrl());
            $entityConfiguration->setUsername($this->getUsername());
            $entityConfiguration->setPassword($this->getPassword());
            $entityConfiguration->setProxy($this->getProxy());
            if($urlGeneratorImpl = $this->getUrlGeneratorImpl()) {
                $entityConfiguration->setURLGeneratorImpl(new $urlGeneratorImpl($entityConfiguration));
            }
            if($responseTransformerImpl = $this->getResponseTransformerImpl()) {
                $entityConfiguration->setResponseTransformerImpl(new $responseTransformerImpl($entityConfiguration));
            }
            
            // override options with entity specific config
            call_user_func_array(
                array($entity, 'configure'),
                array($entityConfiguration)
            );
            $this->_entityConfigurations[$entity] = $entityConfiguration;
        }
        return $this->_entityConfigurations[$entity];
    }

    /**
     * Check if entity exists
     * 
     * @param string $entity
     * @return true
     */
    public function entityExists($entity)
    {
        return $this->getEntityIdentifier($entity) ? true : false;
    }

    /**
     * Get entity identifier.
     * 
     * @param Carerix_Api_Rest_Entity $entity
     * @return string
     */
    public function getEntityIdentifier(Carerix_Api_Rest_Entity $entity)
    {
        $configuration = $this->getEntityConfiguration(get_class($entity));
        $identifierKey = $configuration->getIdentifierKey();
        $entityIdentifier = $configuration->getValue($entity, $identifierKey);
        // required! handles a situation when id was assigned after object was initialiazed
        if($entityIdentifier === null && property_exists($entity, $identifierKey) && $entity->$identifierKey !== null) {
            $entityIdentifier = $entity->$identifierKey;
        }
        return $entityIdentifier;
    }
    
    /**
     * Set entity identifier.
     * 
     * @param Carerix_Api_Rest_Entity $entity
     * @param string|integer $identifierKey
     * @return string
     */
    public function setEntityIdentifier(Carerix_Api_Rest_Entity $entity, $value)
    {
        $configuration = $this->getEntityConfiguration(get_class($entity));
        $identifierKey = $configuration->getIdentifierKey();

        return $configuration->setValue($entity, $identifierKey, $value);
    }

    /**
     * Execute REST request.
     * 
     * @param string|object $entity
     * @param string $url request url
     * @param string $method request method
     * @param array $parameters request params
     * @param string $body request body
     * @param integer $hydrate hydration mode
     * @return mixed Carerix_Api_Rest_Collection|Carerix_Api_Rest_Entity|array|xml|null
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function execute($entity, $url = null, $method = Carerix_Api_Rest_Client::GET, $parameters = null, $body = null, $hydrate = null)
    {
        if (is_object($entity)) {
            $className = get_class($entity);
        } else {
            $className = $entity;
        }

        $configuration = $this->getEntityConfiguration($className);

        $request = new Carerix_Api_Rest_Request();
        $request->setUrl($url);
        $request->setMethod($method);
//        $request->setParameters($parameters); // not used
        $request->setBody($body);
        $request->setUsername($configuration->getUsername());
        $request->setPassword($configuration->getPassword());
        $request->setProxy($configuration->getProxy());
        $request->setResponseType($configuration->getResponseType());
        $request->setResponseTransformerImpl($configuration->getResponseTransformerImpl());

        $result = $this->_client->execute($request);
        // incorrect assumption: modification date field is not getting updated
        // don't parse update (PUT) method and return un-modified entity
//        if(in_array($method, array(Carerix_Api_Rest_Client::PUT, Carerix_Api_Rest_Client::DELETE))) {
//            return $entity;
//        }
        return $this->parse($result, $className, $hydrate);
    }
    
    /**
     * Parse server's response and hydrate it if necessary. 
     * 
     * @param string $response
     * @param object|string $entity
     * @param integer $hydrate hydration mode
     * 
     * @return string|Carerix_Api_Rest_Entity|Carerix_Api_Rest_Collection
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function parse($response, $entity, $hydrate = null) {
        if (is_object($entity)) {
            $className = get_class($entity);
        } else {
            $className = $entity;
        }

        $configuration = $this->getEntityConfiguration($className);
                
        switch($hydrate) {
            case Carerix_Api_Rest_Entity::HYDRATE_NONE:
                return $response;
            break;
            
            case Carerix_Api_Rest_Entity::HYDRATE_ARRAY:
                return $configuration->getResponseTransformerImpl()->transform($response);
            break;
        }

        $result = $configuration->getResponseTransformerImpl()->transform($response);
        if (is_array($result))
        {
            $name = $configuration->getName();

            $identifierKey = $configuration->getIdentifierKey();
            $className = $configuration->getClass();
                        
            // collection
            // <array count="\d+"> doesn't always exist.
            // data-node/list-by doesn't have count attribute in the results, e.g. <array></array>
            // have to check the name of the root node, if = array then we have a collection
//            if(array_key_exists('attributes', $result) && array_key_exists('count', $result['attributes'])) {
            if($configuration->getResponseTransformerImpl()->getRootName() == self::COLLECTION_ROOT_ELEMENT) {
//                $entityName = 'CR'.Carerix_Api_Rest_Entity::getEntityFromObject($className);
                $entityName = Carerix_Api_Rest_Entity::getEntityFromObject($className);

                $collection = new Carerix_Api_Rest_Collection();
                $collection->setRaw($response);
                
//                if(!array_key_exists($entityName, $result) && !array_key_exists(0, $result[$entityName])) {
                if(!array_key_exists($entityName, $result)) {
                    return $this->_hydrateCollection($collection, $hydrate);                       
                }

                // not always available (see data-node/list-by)
                if(array_key_exists('attributes', $result) && array_key_exists('count', $result['attributes'])) {
                    $collection->setTotalCount((integer) $result['attributes']['count']);
                    unset($result['attributes']);
                }
                
                // Empty resultset: <array count="0"></array>
                // return an empty collection or array depending on hydrate method
//                if($collection->getTotalCount() === 0 || !array_key_exists($entityName, $result)) {
//                    return $this->_hydrateCollection($collection, $hydrate);          
//                }
                                
                // wrap single record in array
                if(!array_key_exists(0, $result[$entityName])) {
                    $result[$entityName] = array($result[$entityName]);                    
                }
           
                // drop 'CR*' index
                $result = array_shift($result);
                
                // add count for results w/o "count" attribute in root "array" element
                if($collection->getTotalCount() === null) {
                    $collection->setTotalCount(count($result));
                }
                
                foreach ($result as $data) {
                    $identifier = $this->getIdentifier($configuration, $data);
                    if (isset($this->_identityMap[$className][$identifier]))
                    {
                        $instance = $this->_identityMap[$className][$identifier];
                    } else {
                        $instance = $configuration->newInstance();
                        $this->_identityMap[$className][$identifier] = $instance;
                    }

                    $collection->append($this->_hydrate($configuration, $instance, $data, null));
                }

                return $this->_hydrateCollection($collection, $hydrate);
            }
            // record
            else {        
                if (is_object($entity))
                {
                    $instance = $this->_hydrate($configuration, $entity, $result, $hydrate);
                    $identifier = $this->getIdentifier($configuration, $result);
                    $this->_identityMap[$className][$identifier] = $instance;
                } else {
                    // this approach doesn't warrant 2 entities with the same id to co-exist provided
                    // they were fetched w/ different query params
                    $identifier = $this->getIdentifier($configuration, $result);
//                    $identifier = $this->getUniqueIdentifier($configuration, $response);
                    if($identifier !== null) {
                        if (isset($this->_identityMap[$className][$identifier]))
                        {
                            $instance = $this->_identityMap[$className][$identifier];
                        } else {
                            $instance = $configuration->newInstance();
                            $this->_identityMap[$className][$identifier] = $instance;
                        }
                    } else {
                        // [AY] no identifier is available - new record.
                        // usage scenario: Entity::fromXml('<?xml><CREntity><attr>value</attr></CREntity>
                        $instance = $configuration->newInstance();
                    }
                    $instance->setRaw($response); // set raw server response for raw hydration feature
                    $instance = $this->_hydrate($configuration, $instance, $result, $hydrate);
                }
                return $instance;
            }
        } 
        else {
            return $result;
        }
    }
    
    /**
     * Get identifier.
     * 
     * @param Carerix_Api_Rest_EntityConfiguration $configuration
     * @param array $result
     * @throws Carerix_Api_Rest_Exception
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    public function getIdentifier(Carerix_Api_Rest_EntityConfiguration $configuration, $result) {
        
        $identifierKey = $configuration->getIdentifierKey();
        if(array_key_exists($identifierKey, $result)) {
            return $result[$identifierKey];
        }
        elseif (array_key_exists('attributes', $result) && array_key_exists('id', $result['attributes'])) {
            return $result['attributes']['id'];
        }
        return null;
        // [AY] incompatible w/ Entity::fromXml method. XML document might contain a new record w/o id.
//        throw new Carerix_Api_Rest_Exception('Unable to guess object identifier key.');
    }
    
    /**
     * Generate a unique pointer for entity object
     * 
     * @param Carerix_Api_Rest_EntityConfiguration $configuration
     * @param String $response raw response body from the server
     */
    public function getUniqueIdentifier(Carerix_Api_Rest_EntityConfiguration $configuration, $response) {
        return md5($response);
    }
        
    /**
     * Hydrates a collection.
     * 
     * @param Carerix_Api_Rest_Collection $collection
     * @param integer $hydrate[optional] hydration mode
     * 
     * @return mixed Carerix_Api_Rest_Collection|array|xml 
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     */
    private function _hydrateCollection(Carerix_Api_Rest_Collection $collection, $hydrate = null)
    {    
        switch($hydrate) {
            case Carerix_Api_Rest_Entity::HYDRATE_OBJECT_ARRAY:
                $collection = $collection->toArray();
            break;
            
            case Carerix_Api_Rest_Entity::HYDRATE_OBJECT_XML:
                $collection = $collection->toXml();
            break;            
        }
        
        return $collection;
    }
    
    /**
     * Update in-memory entity state
     * 
     * @param Carerix_Api_Rest_EntityConfiguration $configuration
     * @param Carerix_Api_Rest_Entity $instance
     * @param array $data
     * @param integer $hydrate
     * @return mixed Carerix_Api_Rest_Entity|array|string
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     */
    private function _hydrate(Carerix_Api_Rest_EntityConfiguration $configuration, Carerix_Api_Rest_Entity $instance, array $data, $hydrate = null)
    {
        Carerix_Api_Rest_Entity::fromArrayStatic($data, $instance, $configuration);            
        switch($hydrate) {
            case Carerix_Api_Rest_Entity::HYDRATE_OBJECT_ARRAY:
                $instance = $instance->toArray();
            break;
            
            case Carerix_Api_Rest_Entity::HYDRATE_OBJECT_XML:
                $instance = $instance->toXml();
            break;
        }
        
        return $instance;
    }
}