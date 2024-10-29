<?php

/**
 * Load main vars from setup file
 */
include_once __DIR__ . '/_config.php';

/**
 * Autoload all Controllers, Models and Views
 */
include_once SYS_URL . DS . 'autoload.php';

// Load used controllers, Models and views
use App\Controllers\userController;
use App\Controllers\UrlController;

$userController = new userController();
$userController->index();
echo '<br />';
$urlController = new urlController();
$urlController->index();

echo '<br />';
echo isset($_GET['page'])?$_GET['page']:'';
echo '<br />';
echo isset($_GET['view'])?$_GET['view']:'';
echo '<br />';
echo isset($_GET['action'])?$_GET['action']:'';