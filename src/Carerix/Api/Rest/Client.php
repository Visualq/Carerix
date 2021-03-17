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
 * Basic class for issuing HTTP requests via PHP curl.
 *
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       2.0
 * @version     $Revision$
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */

/**
 * Port to PHP 5.2 with extended functionality
 * 
 * @author        Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
class Carerix_Api_Rest_Client
{
    const POST   = 'POST';
    const GET    = 'GET';
    const PUT    = 'PUT';
    const DELETE = 'DELETE';

    const PROXY_REWRITE_HEADER = "HTTP/1.0 200 Connection established\r\n\r\n";
    
    /**
     * 
     * @var Carerix_Api_Rest_Request
     */
    protected $request = null;
    
    /**
     *
     * @var string
     */
    protected $last_request = null;
    
    /**
     *
     * @var string
     */
    protected $last_response = null;
        
    /**
     * Execute POST request.
     * 
     * @param Carerix_Api_Rest_Request $request
     * @return mixed
     */    
    public function post(Carerix_Api_Rest_Request $request)
    {
        $request->setMethod(self::POST);
        return $this->execute($request);
    }

    /**
     * Execute GET request.
     * 
     * @param Carerix_Api_Rest_Request $request
     * @return mixed
     */    
    public function get(Carerix_Api_Rest_Request $request)
    {
        $request->setMethod(self::GET);
        return $this->execute($request);
    }

    /**
     * Execute DELETE request.
     * 
     * @param Carerix_Api_Rest_Request $request
     * @return mixed
     */    
    public function put(Carerix_Api_Rest_Request $request)
    {
        $request->setMethod(self::PUT);
        return $this->execute($request);
    }

    /**
     * Execute DELETE request.
     * 
     * @param Carerix_Api_Rest_Request $request
     * @return mixed
     */
    public function delete(Carerix_Api_Rest_Request $request)
    {
        $request->setMethod(self::DELETE);
        return $this->execute($request);
    }

    /**
     * Execute REST API request.
     * 
     * @author Jonathan H. Wage <jonwage@gmail.com>
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * 
     * @param Carerix_Api_Rest_Request $request
     * @return mixed
     * 
     * @throws Carerix_Api_Rest_Exception
     */
    public function execute(Carerix_Api_Rest_Request $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->getUrl());
        // This constant is not available when open_basedir or safe_mode are enabled.
//        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // [AY] CURLOPT_VERBOSE, CURLOPT_HEADER required for capturing response headers
        curl_setopt($ch, CURLOPT_VERBOSE, 1); 
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1); // [AY] required for capturing request headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        curl_setopt($ch, CURLOPT_USERAGENT, __CLASS__);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $proxy = $request->getProxy();
        if($proxy) {
            $proxy = parse_url($proxy);
            curl_setopt($ch, CURLOPT_PROXY, $proxy['host']);
            if(array_key_exists('port', $proxy)) {
                curl_setopt($ch, CURLOPT_PROXYPORT, $proxy['port']);
            }
        }
         
        $username = $request->getUsername();
        $password = $request->getPassword();

        if ($username && $password) {
            curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
        }

        switch ($request->getMethod()) {
            case self::POST:
            case self::PUT:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request->getMethod());
                switch($request->getResponseType()) {
                    case 'xml':
                        $contentType = 'application/xml';
                    break;
                    
                    case 'json':
                        $contentType = 'application/json';
                    break;
                    
                    case 'sencha':
                    case 'js':
                        $contentType = 'application/javascript';
                    break;
                }
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: '.$contentType));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getBody());
                break;
            case self::DELETE:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
            case self::GET:
            default:
                break;
        }

        $response = curl_exec($ch);
             
        $this->last_request  = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        $this->last_request .= $request->getBody();
        // [AY] in case of 204 No content response response is always empty
        if ( $response === false) {
            $errorNumber = curl_errno($ch);
            $error = curl_error($ch);
            curl_close($ch);

            throw new Exception($errorNumber . ': ' . $error);
        }

        $response              = $this->parseResponse($response);
        $this->last_response = $response;
        
        list($header, $body) = explode("\r\n\r\n", $response, 2);     
                
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if(!in_array($code, array('200', '201', '204'))) {
            throw new Carerix_Api_Rest_Exception($body, $code);
        }
        curl_close($ch);
        
        return $body;
    }
    
    /**
     * Get the last HTTP request as string
     * 
     * @param boolean $safe[optional] true removes any sensentive data from request message. useful for saving requests messages into logs.
     * false returns unsanitized request. default: true.
     * 
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @return string
     */
    public function getLastRequest($safe = true)
    {
        $last_request = $this->last_request;
        if($safe === true && $last_request) {
            $last_request = preg_replace('/Authorization: ([^\n]+)/sim', 'Authorization: ****', $last_request, 1);
        }
        return $last_request;
    }
    
    /**
     * Get the last HTTP response received by this client
     *
     * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
     * @return String
     */
    public function getLastResponse()
    {
        return $this->last_response;
    }
    
    /**
     * Parse Response
     * Remove rewrite's proxy headers
     * 
     * @param $response string
     * @return string
     */
    protected function parseResponse($response)
    {
        do {
            $parts  = preg_split('|(?:\r?\n){2}|m', $response, 2);
            $again  = false;
        
            if (isset($parts[1]) && preg_match("|^HTTP/1\.[01](.*?)\r\n|mi", $parts[1])) {
                $response    = $parts[1];
                $again       = true;
            }
        } while ($again);
        
        // remove rewrite's proxy headers
        if (stripos($response, self::PROXY_REWRITE_HEADER) !== false) {
            $response = str_ireplace(self::PROXY_REWRITE_HEADER, '', $response);
        }
        
        return $response;
    } 
}