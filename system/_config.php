<?php

define('SYS_URL', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('END_EXTENSION', '.php');
define('DEFAULT_PAGE', 'dashboard');
define('DEFAULT_VIEW', 'home');
define('VIEWS_URL', 'app' . DS . 'Views' . DS);
define('VIEWS_404', 'app' . DS . 'Views' . DS . '404' . DS . 'index' . END_EXTENSION);
define('VIEWS_NOT_FOUND', 'app' . DS . 'Views' . DS . '404' . DS . 'not_found' . END_EXTENSION);

// Load main vars
$page   = isset( $_GET[ 'page' ])   ? ( ( $_GET[ 'page' ]   != '') ? $_GET[ 'page' ]   : null )   : null;
$view   = isset( $_GET[ 'view' ])   ? ( ( $_GET[ 'view' ]   != '') ? $_GET[ 'view' ]   : null )   : null;
$action = isset( $_GET[ 'action' ]) ? ( ( $_GET[ 'action' ] != '') ? $_GET[ 'action' ] : null )   : null;
