<?php

namespace Mvc\Entity\User;

class Member extends User
{
	private string $numberPeople;
	private string $dateCreated;

	public function __construct(string $name, string $phone, string $role, string $type, string $numberPeople, string $dateCreated) {
		parent::__construct($name, $phone, $role, $type);
		$this->numberPeople = $numberPeople;
		$this->dateCreated = $dateCreated;
	}

	public function getNumberPeople()
	{
		return $this->numberPeople;
	}

	public function getDateCreated()
	{
		return $this->dateCreated;
	}
}