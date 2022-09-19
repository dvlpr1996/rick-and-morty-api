<?php

namespace app\controllers;

use app\utilities\Config;
use Buki\Router\Http\Controller;
use app\core\adapter\GuzzleAdapter;

class CharacterController extends Controller
{
	public function index(string $id)
	{
		$singleCharacters = GuzzleAdapter::response(Config::get('api.singleCharacters') . $id);
		view('character', compact('singleCharacters'));
	}
}
