<?php

use app\utilities\Config;

return [
	'base_folder' => BASE_PATH . 'public/',
	'main_method' => 'index',
	'paths' => [
		'controllers' => BASE_PATH . 'app/controllers',
		'middlewares' => BASE_PATH . 'app/middlewares'
	],
	'namespaces' => [
		'controllers' => 'app\controllers',
		'middlewares' => 'app\middlewares'
	],
	'debug' => Config::get('app.ROUTER_DEBUG'),
	// 'cache' => realpath(CACHE_PATH . 'route/cache.php')
];
