<?php

namespace Mvc\Entity\User;

use Exception;

abstract class User
{
	protected string $name;
	protected string $phone;
	protected string $role;
	protected string $type;

	public function __construct(string $name, string $phone, string $role, string $type) 
	{
		$this->validateName($name);
		$this->name = $name;

		$this->validatePhone($phone);
		$this->phone = $phone;
		$this->role = $role;
		$this->type = $type;
	}

	public function getName():string
	{
		return $this->name;
	}
	
	public function getPhone():string
	{
		return $this->phone;
	}

	public function getRole():string
	{
		return $this->role;
	}

	public function getType():string
	{
		return $this->type;
	}

	protected function validatePhone(string $phone)
	{
		if(strlen($phone) < 9){
			$erro = 'Número inválido! Lembre-se de botar o 9 da frente.';
			echo $erro;
			exit();
		}
	} 

	protected function validateName(string $name)
	{
		if(strlen($name) < 5){
			$erro = 'Nome menor que 5 caracteres';
			echo $erro;
			exit();
		}	
	}
}