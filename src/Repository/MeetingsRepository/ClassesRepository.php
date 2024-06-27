<?php

namespace Mvc\Repository\MeetingsRepository;

use Mvc\Entity\Meeting\Classes;
use PDO;

class ClassesRepository
{
	private PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function add(Classes $classes): bool
	{
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('d/m/Y H:i');
		$sql = "INSERT INTO meetings (type, link, name, last_update) VALUE (:type, :link, :name, :last_update)";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':type', $classes->getType());
		$statement->bindValue(':link', $classes->getLink());
		$statement->bindValue(':name', $classes->getName());
		$statement->bindValue(':last_update', $date);

		return $statement->execute();
	}

	public function remove(int $id): bool
	{
		$sql = "DELETE FROM meetings WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':id', $id);
		return $statement->execute();
	}

	public function update(int $id, Classes $classes): bool
	{
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('d-m-Y H:i');
		$sql = "UPDATE meetings SET link = :link, last_update = :date, name = :name WHERE id = :id";
		$statement = $this->pdo->prepare($sql);

		$statement->bindValue(':id', $id);
		$statement->bindValue(':link', $classes->getLink());
		$statement->bindValue(':date', $date);
		$statement->bindValue(':name', $classes->getName());
		return $statement->execute();
	}

	public function find(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM meetings WHERE id = :id;');
        $statement->bindValue(':id', $id);
        $statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC)[0];
    }

	/**
	 * @return Classes[]
	 */
	public function all():array
	{
		$query = $this->pdo->query("SELECT * FROM meetings WHERE type = 'class'")->fetchAll(PDO::FETCH_ASSOC); 
		return $query;
	}

}