<?php

use app\utilities\Config;

define('SITE_TITLE', Config::get('app.SITE_TITLE'));
define('BASE_PATH', Config::get('app.BASE_PATH'));
define('BASE_URL', Config::get('app.BASE_URL'));
define('VIEW_PATH', BASE_PATH . 'resources/views/');
define('CACHE_PATH', BASE_PATH . 'storage/cache/');