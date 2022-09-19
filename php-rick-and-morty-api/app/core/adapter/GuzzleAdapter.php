<?php

namespace app\core\adapter;

use GuzzleHttp\Client;
use app\utilities\Config;

class GuzzleAdapter
{
	public static function load()
	{
		return new Client([
			'base_uri' => Config::get('api.baseUrl'),
		]);
	}

	public static function response(string $uri, array $query = [])
	{
		$options = ['query' => $query];
		$response = self::load()->request('GET', $uri, $options);
		if (self::isSuccess($response)) {
			$response->getHeaderLine('content-type')[0];
			$body = json_decode($response->getBody());
			return $body;
		}
	}

	public static function isSuccess($response)
	{
		if (!$response->getStatusCode() === 200 && !$response->getReasonPhrase() === 'Ok')
			return false;
		return true;
	}
}
