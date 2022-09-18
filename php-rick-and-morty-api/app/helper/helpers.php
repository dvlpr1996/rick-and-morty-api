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
	if (!checkAssetExists(BASE_URL . '/' . $path))
		throw new FileDoesNotExistException();
	return $path;
}

function checkAssetExists(string $path): bool
{
	if (!checkFileExists($path) && !isValidAssetUrl($path))
		return false;
	return true;
}
