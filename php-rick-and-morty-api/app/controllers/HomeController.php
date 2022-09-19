<?php

namespace app\controllers;

use app\utilities\Config;
use Buki\Router\Http\Controller;
use app\core\adapter\GuzzleAdapter;

class HomeController extends Controller
{
	public function index()
	{
		$allCharacters = GuzzleAdapter::response(Config::get('api.allCharacters'), ['page' => 1]);
		view('home', compact('allCharacters'));
	}

	public function pagination(int $id)
	{
		$allCharacters = GuzzleAdapter::response(Config::get('api.allCharacters'), ['page' => $id]);
		view('home', compact('allCharacters'));

	}
}
