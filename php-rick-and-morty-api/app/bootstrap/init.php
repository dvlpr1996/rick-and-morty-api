<?php

use app\core\adapter\DotEnvAdapter;
use app\exceptions\EnvVariableNotDefinedException;

define('BASE_APP_PATH', __DIR__ . '/../../../');

require_once BASE_APP_PATH . 'vendor/autoload.php';

try {
	(new DotEnvAdapter)->requiredElement();
} catch (Exception $e) {
	throw new EnvVariableNotDefinedException();
}

require_once BASE_APP_PATH . 'php-rick-and-morty-api/app/helper/constants.php';
