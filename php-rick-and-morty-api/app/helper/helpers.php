<?php

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
