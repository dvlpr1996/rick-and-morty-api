<?php

namespace app\controllers;

use app\utilities\Config;
use Buki\Router\Http\Controller;
use app\core\adapter\GuzzleAdapter;

class PortalController extends Controller
{
	public function index()
	{
		view('portal');
	}

	public function show()
	{
		$location = GuzzleAdapter::response(Config::get('api.travel'));
		view('portal', compact('location'));
	}
}
