<?php

namespace app\utilities;

use app\exceptions\FileDoesNotExistException;

class Config
{
	private const config_path = __DIR__ . '/../../config/';

	public static function get(string $config)
	{
		$config = explode(".", $config);

		if (!checkFileExists(self::configPath($config[0])))
			throw new FileDoesNotExistException();

		if (count($config) === 1)
			return fetchArray(self::configPath($config[0]));

		$arrayValue = self::getArrayValue($config[1], $config[0]) ??
			throw new \Exception($config[1] . ' has no value');

		return $arrayValue;
	}

	private static function configPath(string $configPath): string
	{
		return realpath(self::config_path . $configPath . '.php');
	}

	private static function getArrayValue($key, $array)
	{
		return getArrayEl($key, fetchArray(self::configPath($array)));
	}
}
