<?php

namespace app\controllers;

use Buki\Router\Http\Controller;

class LocationController extends Controller
{
	public function index()
	{
		view('locations');
	}
}