<?php
/**
 * Created by PhpStorm.
 * User: Simon_2
 * Date: 11-Oct-17
 * Time: 17:37
 */

if (!function_exists('classAutoLoader')){
    function classAutoLoader($className)
    {
        $fileName = 'src/'.
            str_replace('\\', '/', $className).
            '.php';
        if (file_exists($fileName)){
            require_once $fileName;
        }
    }
}
spl_autoload_register('classAutoLoader');