<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = []) {
		extract($vars);
		$path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
	}

	public function redirect($url) {
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code, $layout = 'default') {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		$layout_path = 'application/views/layouts/'.$layout.'.php';
		$title = 'Error '.$code;
		if (file_exists($path) && file_exists($layout_path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require $layout_path;
		}
		exit;
	}

	public function message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url) {
		exit(json_encode(['url' => $url]));
	}

}	