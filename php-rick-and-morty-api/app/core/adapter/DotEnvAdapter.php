<?php

namespace app\core\adapter;

use Dotenv\Dotenv;

class DotEnvAdapter
{
	private $dotenv;

	public function __construct()
	{
		$this->dotenv = Dotenv::createImmutable(BASE_APP_PATH);
	}

	public function loadDotEnv(string $loadType)
	{
		$this->dotenv->$loadType();
	}

	public function requiredElement()
	{
		$this->loadDotEnv("safeLoad");

		$this->dotenv->required('SITE_TITLE')->notEmpty();
		$this->dotenv->required('BASE_URL')->notEmpty();
		$this->dotenv->required('BASE_PATH')->notEmpty();
		// $this->dotenv->required('DISPLAY_ERRORS')->notEmpty();
		// $this->dotenv->required('DISPLAY_STARTUP_ERRORS')->notEmpty();
		// $this->dotenv->required('ERROR_REPORTING')->notEmpty();
	}
}
