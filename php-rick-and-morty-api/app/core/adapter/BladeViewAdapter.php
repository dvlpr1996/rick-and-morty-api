<?php

namespace app\core\adapter;

use Jenssegers\Blade\Blade;
use app\exceptions\VewDoesNotExistException;

class BladeViewAdapter
{
	private const view_extension = '.blade.php';

	private function load()
	{
		return new Blade(VIEW_PATH, CACHE_PATH);
	}

	private function renderView(string $viewPath, array $viewData = [])
	{
		if (!checkFileExists($this->generateViewPath($viewPath)))
			throw new VewDoesNotExistException();

		echo $this->load()->render($viewPath,  $viewData);
	}

	private function generateViewPath(string $path): string
	{
		$path = explode('.', $path);
		$path = str_replace(".", "/", implode(".", $path));
		return VIEW_PATH . $path . self::view_extension;
	}

	public function display(string $viewPath, array $viewData = [])
	{
		$this->renderView(strtolower($viewPath), $viewData);
	}
}
