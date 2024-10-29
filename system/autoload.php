<?php


function app_autoload($class_name){
    $class_name = SYS_URL . DS . str_replace('\\', DS, $class_name) . '.php';
    require_once $class_name;
}

spl_autoload_register('app_autoload');
