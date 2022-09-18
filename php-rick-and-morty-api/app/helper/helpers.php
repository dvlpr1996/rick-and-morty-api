<?php

use app\core\Adapter\BladeViewAdapter;
use app\exceptions\VewDoesNotExistException;
use app\exceptions\DataDoesNotExistException;
use app\exceptions\FileDoesNotExistException;

function checkViewExists(string $path)
{
	if (!checkFileExists(VIEW_PATH . $path))
		throw new VewDoesNotExistException();
	return true;
}

function checkFileExists(string $path): bool
{
	if (!file_exists($path) && !is_file($path))
		return false;
	return true;
}

function fetchArray(string $pathFile)
{
	if (!checkFileExists($pathFile))
		throw new FileDoesNotExistException();
	return include $pathFile;
}

function getArrayEl(string $key, array $array)
{
	if (!array_key_exists($key, $array))
		throw new DataDoesNotExistException();

	return $array[$key] ?? null;
}

function isValidAssetUrl(string $path): bool
{
	if (filter_var($path, FILTER_VALIDATE_URL) === false)
		return false;
	return true;
}

function view(string $path, array $data = [])
{
	return (new  BladeViewAdapter)->display($path, $data);
}

function asset(string $path)
{
	$path = BASE_URL . '/' . $path;
	if (!checkAssetExists($path))
		throw new FileDoesNotExistException();
	return $path;
}

function checkAssetExists(string $path): bool
{
	if (!checkFileExists($path) && !isValidAssetUrl($path))
		return false;
	return true;
}

function route(string $routeName, array $parameter = [])
{
	$route = getRoute($routeName);
	if (!empty($parameter['id'])) {
		return BASE_URL . str_replace(':id', $parameter['id'], $route);
	}
	return BASE_URL . $route;
}

function getRoute(string $routeName)
{
	global $routes;
	$allRoute = $routes->getAllRoutes();
	foreach ($allRoute as $key => $value) {
		if ($value['name'] === $routeName) {
			$route = $value['route'];
		}
	}
	return $route;
}

function displayError(string $msg)
{
	echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
	echo $msg;
	echo "</pre>";
}
