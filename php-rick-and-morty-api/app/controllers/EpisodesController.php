<?php
namespace app\controllers;

use app\utilities\Config;
use Buki\Router\Http\Controller;
use app\core\adapter\GuzzleAdapter;

class EpisodesController extends Controller
{
	public function index()
	{
		$allEpisodes = GuzzleAdapter::response(Config::get('api.allEpisodes'), ['page' => 1]);
		view('episodes', compact('allEpisodes'));
	}

	public function pagination(int $id)
	{
		$allEpisodes = GuzzleAdapter::response(Config::get('api.allEpisodes'), ['page' => $id]);
		view('episodes', compact('allEpisodes'));
	}
}
