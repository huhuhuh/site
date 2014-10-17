<?php

//Controller loads in models and render views
class Controller
{
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}
}