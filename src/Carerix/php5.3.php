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
 * lcfirst method missing in PHP 5.2
 * 
 * @author Andrey Yakubovskiy <andrey.yakubovskiy@gmail.com>
 */
if(!function_exists('lcfirst')) {
    function lcfirst($str) {
        return substr_replace($str, strtolower(substr($str, 0, 1)), 0, 1);
    }
}

/**
 * Late static binding support for PHP 5.2
 * params in method on a called class should be declared on one line, e.g.
 * now supports multiple invocation of the same method from the same line. 
 * 
 * someCalledClass::get($p1, p2);
 * 
 * otherwise, the called class won't be detected. this is won't work
 * 
 * someCalledClass::get(
 *      $p1, 
 *      p2
 * );
 */

if(!function_exists('get_called_class')) {
    function get_called_class($bt = false,$l = 1) {
        if (!$bt) $bt = debug_backtrace();
        if (!isset($bt[$l])) throw new Exception("Cannot find called class -> stack level too deep.");
        if (!isset($bt[$l]['type'])) {
            throw new Exception ('type not set');
        }
        else switch ($bt[$l]['type']) {
            case '::':
                $lines = file($bt[$l]['file']);
                $i = 0;
                $callerLine = '';
                do {
                    $i++;
                    $callerLine = $lines[$bt[$l]['line']-$i] . $callerLine;
                } while (stripos($callerLine,$bt[$l]['function']) === false);
                preg_match('/([a-zA-Z0-9\_]+)::'.$bt[$l]['function'].'/',
                $callerLine,
                $matches);
                if (!isset($matches[1])) {
                    // must be an edge case.
                    throw new Exception ("Could not find caller class: originating method call is obscured.");
                }
                switch ($matches[1]) {
                    case 'self':
                    case 'parent':
                        return get_called_class($bt,$l+1);
                    default:
                        return $matches[1];
                }
                // won't get here.
            case '->': switch ($bt[$l]['function']) {
                case '__get':
                    // edge case -> get class of calling object
                    if (!is_object($bt[$l]['object'])) throw new Exception ("Edge case fail. __get called on non object.");
                    return get_class($bt[$l]['object']);
                default: return $bt[$l]['class'];
            }

            default: throw new Exception ("Unknown backtrace method type");
    }
}
}

/**
 * call_user_func implementation for lazy-static binding in PHP 5.2
 * If you are using PHP 5.3+ use call_user_func_array directly.
 * Do NOT use this function for non-static calls, instead use native call_user_func_array
 * 
 * works with:
 * call_user_func_array_lsb(array($classname, 'say_hello'));
 * call_user_func_array_lsb($classname .'::say_hello'); // As of 5.2.3
 * 
 * @param string|array $callback
 * @param array $args
 * @return mixed
 */
function call_user_func_array_lsb($callback, $args) {
    if(is_string($callback)) {
        $callback = explode('::', $callback);
    }
    if(is_array($callback)) {
        list($class, $method) = $callback;
    }
    $argsStr = array();
    foreach($args as $arg) {
        //$argsStr[] = 'unserialize(stripslashes(\''.addslashes(serialize($arg)).'\'))';
        $argsStr[] = 'unserialize(base64_decode(\''.base64_encode(serialize($arg)).'\'))';
    }
    $argsStr = implode(',', $argsStr);
    
    $filename = sys_get_temp_dir()."/".uniqid();
    file_put_contents($filename, '<?php $result = '.$class.'::'.$method.'('.$argsStr.');');
    require_once $filename;
    unlink($filename);
    return $result;           
}
