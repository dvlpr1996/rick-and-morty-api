<?php

require_once realpath(__DIR__ . '/../app/bootstrap/init.php');
require_once realpath(__DIR__ . '/../routes/web.php');

$routes->runRouter();
