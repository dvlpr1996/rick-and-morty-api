<?php

use Buki\Router\Router;
use app\utilities\Config;
use app\controllers\HomeController;
use app\controllers\LocationController;
use app\controllers\CharacterController;

$routes = new Router(Config::get('router'));

$routes->get('/', [HomeController::class, 'index'], ['name' => 'home.index']);
$routes->get('/character/:id', [CharacterController::class, 'index'], ['name' => 'character.index']);
$routes->get('/locations', [LocationController::class, 'index'],['name' => 'locations.index']);
$routes->get('/episodes', [EpisodesController::class, 'index'],['name' => 'episodes.index']);

$routes->notFound(function () {
	// todo :implements this
	return "error : route not found";
});

$routes->error(function () {
	// todo :implements this
	return "Looks like page not found or something went wrong. Please try again.";
});

$routes->run();
