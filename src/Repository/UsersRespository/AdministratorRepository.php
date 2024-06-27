<?php

namespace Mvc\Repository\UsersRespository;

use Mvc\Entity\User\Administrator;
use PDO;

class AdministratorRepository
{
	private PDO $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}

	public function add(Administrator $adm): bool
	{
		$sql = "INSERT INTO users (name, phone, type, role, password) VALUES (:name, :phone, :type, :role, :password)";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':name', $adm->getName());
		$statement->bindValue(':phone', $adm->getPhone());
		$statement->bindValue(':type', $adm->getType());
		$statement->bindValue(':role', $adm->getRole());
		$statement->bindValue(':password', $adm->getPassword());

		return $statement->execute();
	}

	public function remove(int $id):bool
	{
		$sql = "REMOVE FROM users WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':id', $id);
		
		return $statement->execute(); 
	}

	public function update(int $id, Administrator $adm):bool
	{
		$sql = "UPDATE user SET name = :name, phone = :phone, role = :role WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":name", $adm->getName());
		$statement->bindValue(":phone", $adm->getPhone());
		$statement->bindValue(":role", $adm->getRole());
		$statement->bindValue(":id", $id);

		return $statement->execute();
	}

	public function all():array
	{
		$sql = "SELECT * FROM users";
		$statement = $this->pdo->prepare($sql);
		$query = $statement->fetchAll(PDO::FETCH_ASSOC);

		return array_map(function(array $admsData){
			return new Administrator(...$admsData);
		}, $query);

		
	}


}