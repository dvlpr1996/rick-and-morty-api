<?php

namespace app\controllers;

use app\utilities\Config;
use Buki\Router\Http\Controller;
use app\core\adapter\GuzzleAdapter;

class LocationController extends Controller
{
	public function index()
	{
		$allLocations = GuzzleAdapter::response(Config::get('api.allLocations'));
		view('locations', compact('allLocations'));
	}

	public function pagination(int $id)
	{
		$allLocations = GuzzleAdapter::response(Config::get('api.allLocations'), ['page' => $id]);
		view('locations', compact('allLocations'));
	}
}
