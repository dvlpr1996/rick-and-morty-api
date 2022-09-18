<?php
namespace app\controllers;

use Buki\Router\Http\Controller;

class EpisodesController extends Controller
{
	public function index()
	{
		view('episodes');
	}
}
