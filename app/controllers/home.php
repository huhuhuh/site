<?php

class Home extends Controller 
{
	public function index($name = '')
	{
		$user = $this->model('User');
		$user->setName($name);
		
		//path
		$this->view('home/index', ['name' => $user->getName()]);
	}

}