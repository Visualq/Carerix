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

//namespace Doctrine\REST\Client\ResponseTransformer;

//use Doctrine\REST\Client\EntityConfiguration;

if(!class_exists('Carerix_Api_Rest_EntityConfiguration')) {
    require_once 'Carerix/Api/Rest/EntityConfiguration.php';
}

/**
 * Abstract REST request response transformer
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */

/**
 * Port to PHP 5.2 w/ docs
 * @author        Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
abstract class Carerix_Api_Rest_ResponseTransformer_AbstractResponseTransformer
{
    /**
     * @var Carerix_Api_Rest_EntityConfiguration
     */
    protected $_entityConfiguration;

    /**
     * @param Carerix_Api_Rest_EntityConfiguration $entityConfiguration
     */
    public function __construct(Carerix_Api_Rest_EntityConfiguration $entityConfiguration)
    {
        $this->_entityConfiguration = $entityConfiguration;
    }
    
    /**
     * 
     * Transfor response according the the specified input format
     * @param mixed $data
     * @return mixed
     */
    abstract public function transform($data);
}