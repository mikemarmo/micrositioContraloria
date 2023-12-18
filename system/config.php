<?php
defined('BASEPATH') or exit('No se permite acceso directo');

///////////////////////////////////////
//Valores URI
///////////////////////////////////////
define('URI', $_SERVER['REQUEST_URI']);

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

///////////////////////////////////////
//Valores de Rutas
///////////////////////////////////////
define('FOLDER_PATH', '/micrositioContraloria');

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('PATH_VIEWS', FOLDER_PATH . '/app/views/');

define('PATH_CONTROLLERS', 'app/controllers/');

define('HELPER_PATH', 'system/helpers/');

define('LIBS_ROUTE', ROOT . FOLDER_PATH . '/system/libs/');

define('PATH_CSS', FOLDER_PATH . '/app/views/css/');

define('PATH_MODELS', FOLDER_PATH . '/app/models/');

define('PATH_IMAGES', FOLDER_PATH . '/system/img/');

define('PATH_DOCUMENTS', FOLDER_PATH . '/system/documents/');

define('PATH_JS', FOLDER_PATH . '/app/views/js/');



///////////////////////////////////////
//Valores de Core
///////////////////////////////////////
define('CORE', 'system/core/');
define('DEFAULT_CONTROLLER', 'Home');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'dbmainproject');

//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);


?>