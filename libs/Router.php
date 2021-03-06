<?php

class Route {

	private $url;
	private $controller;
	private $method;

    function __construct() {
        
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
        $url = rtrim($url, '/');
		$url = explode('/', $url);
		array_shift($url);

		Test::Console_Write($url);

		// $url[0] expects to be string after / in url
		$this->method = $url;

		if (isset($url[0])) {
			$this->url = '/' . $url[0];
		} else {
			$this->url = '/';
		}
	}

	public function redirect($controller, $function = NULL)
	{	

		if (!isset($this->controller)) {

			$this->controller = $controller['controller'];

			$file = 'controller/' . $controller['path'] . '.php';

		    if(file_exists($file)){
		        require $file;
		    }else{
		        //$error();
		    }
		}

		if ($function != NULL) {
			$function();
		}
	}

	public function get($uri, $controller, $function = NULL)
	{	

		if ($this->url === $uri) {

			$this->controller = $controller['controller'];

			$file = 'controller/' . $controller['path'] . '.php';

			Test::Console_Write($uri);

		    if(file_exists($file)){
		        require $file;
		    }else{
		        //$error();
		    }
		}

		if ($function != NULL) {
			$function();
		}
	}

	public function run()
	{
		if (!isset($this->controller)) {
			require 'controller/error.php';
			$this->controller = 'Error';
		}

		$controller = new $this->controller;

		// calling methods
		if (isset($this->method[2])) {
			if (method_exists($controller, $this->method[1])) {
				$controller->{$this->method[1]}($this->method[2]);
			} else {
				$this->error();Test::Console_Write('test');

				console_write('method 2 : ' . $this->method[2]);
			}
		} else {
			if (isset($this->method[1])) {
				if (method_exists($controller, $this->method[1])) {
					console_write('method 1 : ' . $this->method[1]);
					$controller->{$this->method[1]}();
				} else {
					$this->error();
					console_write('method 1 : ' . $this->method[1]);
				}
			} else {
				$controller->index();
			}
		}
	}
}