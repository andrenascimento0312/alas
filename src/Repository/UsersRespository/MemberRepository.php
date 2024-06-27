<?php

namespace Mvc\Repository\UsersRespository;

use Mvc\Entity\User\Member;
use PDO;

class MemberRepository
{
	private PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function add(Member $member): bool
	{
		$sql = "INSERT INTO users (name, phone, role, type, number_people, date_created) VALUES (:name, :phone, :role, :type, :number_people, :date_created)";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':name', $member->getName());
		$statement->bindValue(':phone', $member->getPhone());
		$statement->bindValue(':role', $member->getRole());
		$statement->bindValue(':type', $member->getType());
		$statement->bindValue(':number_people', $member->getNumberPeople());
		$statement->bindValue(':date_created', $member->getDateCreated());

		return $statement->execute();
	}

	public function remove(int $id):bool
	{
		$sql = "REMOVE FROM users WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':id', $id);
		
		return $statement->execute(); 
	}

	public function update(int $id, Member $member):bool
	{
		$sql = "UPDATE user SET name = :name, phone = :phone, role = :role WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(":name", $member->getName());
		$statement->bindValue(":phone", $member->getPhone());
		$statement->bindValue(":role", $member->getRole());
		$statement->bindValue(":id", $id);

		return $statement->execute();
	}

	public function all():array
	{
		$sql = "SELECT * FROM users";
		$statement = $this->pdo->prepare($sql);
		$query = $statement->fetchAll(PDO::FETCH_ASSOC);

		return array_map(function(array $membersData){
			return new Member(...$membersData);
		}, $query);

		
	}

}