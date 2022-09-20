<?php

namespace app\core\adapter;

use Buki\Router\Router;
use app\utilities\Config;

class RouterAdapter
{
	private $router;
	public function __construct()
	{
		$this->router = new Router(Config::get('router'));
	}

	public function get(string $route, array $action, string $routeName)
	{
		return $this->router->get($route, $action, ['name' => $routeName]);
	}

	public function getAllRoutes()
	{
		return $this->router->getRoutes();
	}

	public function runRouter()
	{
		$this->dispatch404();
		$this->displayError();
		return $this->router->run();
	}

	public function dispatch404()
	{
		return $this->router->notFound(function () {
			header("HTTP/1.0 404 Not Found");
			view('errors.404');
			die();
		});
	}

	public function displayError()
	{
		return $this->router->error(function () {
			view('errors.error');
		});
	}
}
