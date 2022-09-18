<?php

use Buki\Router\Router;
use app\utilities\Config;
use app\controllers\HomeController;

$routes = new Router(Config::get('router'));

$routes->get('', [HomeController::class, 'index'],['name' => 'home.index']);

$routes->error(function () {
	// todo :implements this
	return "error";
});

$routes->run();
