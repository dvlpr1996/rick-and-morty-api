<?php

namespace app\core\adapter;

use Jenssegers\Blade\Blade;
use app\exceptions\VewDoesNotExistException;

class BladeViewAdapter
{
	private const view_extension = '.blade.php';

	public function load()
	{
		return new Blade(VIEW_PATH, CACHE_PATH);
	}

	public function renderView(string $viewPath, array $viewData = [])
	{
		if (!checkViewExists($viewPath . self::view_extension))
			throw new VewDoesNotExistException();

		echo $this->load()->render($viewPath,  $viewData);
	}

	public function display(string $viewPath, array $viewData = [])
	{
		$this->renderView(strtolower($viewPath), $viewData);
	}
}
