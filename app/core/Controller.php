<?php

//Controller loads in models and render views
class Controller
{
	protected function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}
	public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}
}