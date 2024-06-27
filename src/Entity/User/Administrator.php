<?php

namespace Mvc\Entity\User;

class Administrator extends User
{
	private string $password;

	public function __construct(string $name, string $phone, string $role, string $type,string $password) {
		// parent::__construct($name, $phone, $role, $type);
		$this->name = $name;
		$this->phone = $phone;
		$this->role = $role;
		$this->type = $type;
		$this->password = $password;
	}

	public function getPassword():string
	{
		return $this->password;
	}

	public function validatePassword(string $password):bool
	{
		if($password === $this->getPassword()){
			return true;
		}

		return false;
	}

}