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
use App\Controllers\UrlController;

$urlController = new urlController($page,$view,$action);
$urlController->run();