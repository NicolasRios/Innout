<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

// Constantes gerais
define('DAILY_TIME', 60 * 60 * 8);

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/User.php'));
require_once(realpath(MODEL_PATH . '/Login.php'));
require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));


/* define('MODEL_PATH', ('/Nicolas/innout/src/models'));
define('VIEW_PATH', ('/Nicolas/innout/src/views'));
define('TEMPLATE_PATH', ('/Nicolas/innout/src/views/template'));
define('CONTROLLER_PATH', ('/Nicolas/innout/src/controllers'));
define('EXCEPTION_PATH', ('/Nicolas/innout/src/exceptions')); */

/* require_once('/Nicolas/innout/src/config/database.php');
require_once('/Nicolas/innout/src/config/loader.php');
require_once('/Nicolas/innout/src/config/session.php');
require_once('/Nicolas/innout/src/config/date_utils.php');
require_once('/Nicolas/innout/src/config/utils.php');
require_once('/Nicolas/innout/src/config/login.php');
require_once('/Nicolas/innout/src/config/day_records.php');
require_once('/Nicolas/innout/src/models/Model.php');
require_once('/Nicolas/innout/src/models/User.php');
require_once('/Nicolas/innout/src/models/WorkingHours.php');
require_once('/Nicolas/innout/src/exception/AppException.php');
require_once('/Nicolas/innout/src/exception/ValidationException.php'); */