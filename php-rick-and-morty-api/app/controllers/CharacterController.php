<?php

namespace app\controllers;

use Buki\Router\Http\Controller;

class CharacterController extends Controller
{
	public function index(string $id)
	{
		view('character',compact('id'));
	}
}
