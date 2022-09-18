<?php

use Buki\Router\Router;
use app\utilities\Config;
use app\controllers\HomeController;
use app\controllers\PortalController;
use app\controllers\LocationController;
use app\controllers\CharacterController;

$routes = new Router(Config::get('router'));

$routes->get('/', [HomeController::class, 'index'], ['name' => 'home.index']);
$routes->get('/character/:id', [CharacterController::class, 'index'], ['name' => 'character.index']);
$routes->get('/locations', [LocationController::class, 'index'],['name' => 'locations.index']);
$routes->get('/episodes', [EpisodesController::class, 'index'],['name' => 'episodes.index']);
$routes->get('portal', [PortalController::class, 'index'],['name' => 'portal.index']);
$routes->get('portal/show', [PortalController::class, 'show'],['name' => 'portal.show']);

$routes->notFound(function () {
	// todo :implements this
	return "error : route not found";
});

$routes->error(function () {
	// todo :implements this
	return "Looks like page not found or something went wrong. Please try again.";
});

$routes->run();
