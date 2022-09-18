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

	public function getAllRoutes() {
		return $this->router->getRoutes();
	}

	public function runRouter()
	{
		return $this->router->run();
	}
}
