<?php

require_once 'AbstractModel.php';

class User extends AbstractModel
{
	
	protected $name;
	
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name=$name;
	}
	
	
}
