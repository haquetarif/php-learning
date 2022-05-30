<?php

class Router

{
	protected $router =[];

	/* function _construct($router) 

	{

		$this->router = $router;
	}

	public function define($routes)
	
	{
		$this->routes = $routes;
	} */

	public function define($routes)

	{

		$this->routes = $routes;
	}

	public function direct($uri)

	{
		if (array_key_exists($uri, $this->routes))

		{

			return $this->routes['about/culture'];

		}
	
	
		throw new Exception('No route defined for this URI.');

	}

}

?>