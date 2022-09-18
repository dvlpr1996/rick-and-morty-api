<?php

use app\controllers\HomeController;
use app\core\adapter\RouterAdapter;
use app\controllers\PortalController;
use app\controllers\EpisodesController;
use app\controllers\LocationController;
use app\controllers\CharacterController;

$routes = new RouterAdapter();

$routes->get('/', [HomeController::class, 'index'],'home.index');
$routes->get('/character/:id', [CharacterController::class, 'index'],'character.index');
$routes->get('/locations', [LocationController::class, 'index'],'locations.index');
$routes->get('/episodes', [EpisodesController::class, 'index'],'episodes.index');
$routes->get('portal', [PortalController::class, 'index'],'portal.index');
$routes->get('portal/show', [PortalController::class, 'show'],'portal.show');
