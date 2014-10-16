<?php

class App
{

	//Very basic routing (ie. /public/home/index/param1/param2)
	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

 	//Do things when we load the page 
	public function __construct()
	{

		print_r($this->parseUrl());
	}

	public function parseUrl()
	{
		if(isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}

}