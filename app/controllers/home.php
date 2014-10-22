<?php

class Home extends Controller 
{
	public function __construct(){
		$this->user = $this->model('User');
	}
	public function index($name = '')
	{
		$user = $this->user;
		$user->setName($name);

		//path
		$this->view('home/index', ['name' => $user->getName()]);
	}
	public function create($username = '', $email = ''){
		
	}

}