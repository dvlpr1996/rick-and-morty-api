<?php

namespace app\controllers;

use Buki\Router\Http\Controller;

class PortalController extends Controller
{
	public function index()
	{
		view('portal');
	}

	public function show()
	{
		view('portal');
	}
}
