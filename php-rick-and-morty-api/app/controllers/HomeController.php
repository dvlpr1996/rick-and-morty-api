<?php

namespace app\controllers;

use Buki\Router\Http\Controller;

class HomeController extends Controller
{
	public function index()
	{
		view('home');
	}
}
