<?php

use app\utilities\Config;
use app\core\adapter\DotEnvAdapter;
use app\exceptions\EnvVariableNotDefinedException;

define('BASE_APP_PATH', __DIR__ . '/../../../');

require_once BASE_APP_PATH . 'vendor/autoload.php';

try {
	(new DotEnvAdapter)->requiredElement();
} catch (EnvVariableNotDefinedException $e) {
	$e->getMessage();
}

ini_set('display_errors', Config::get('app.DISPLAY_ERRORS'));
ini_set('display_startup_errors', Config::get('app.DISPLAY_STARTUP_ERRORS'));
error_reporting(Config::get('app.ERROR_REPORTING'));

require_once BASE_APP_PATH . 'php-rick-and-morty-api/app/helper/constants.php';