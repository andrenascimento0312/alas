<?php

namespace Mvc\Repository\MeetingsRepository;

use Mvc\Entity\Meeting\Sacramental;
use PDO;

class SacramentalRepository
{
	private PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function add(Sacramental $sacramental): bool
	{
		$date = date('d-m-Y H:i');
		$sql = "INSERT INTO meetings (type, link, last_update) VALUE (:type, :link, :last_update)";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':type', $sacramental->getType());
		$statement->bindValue(':link', $sacramental->getLink());
		$statement->bindValue(':date', $date);

		return $statement->execute();
	}

	public function remove(int $id): bool
	{
		$sql = "DELETE FROM meetings WHERE id = :id";
		$statement = $this->pdo->prepare($sql);
		$statement->bindValue(':id', $id);
		return $statement->execute();
	}

	public function update(int $id, Sacramental $sacramental): bool
	{
		$date = date('d-m-Y H:i');
		$sql = "UPDATE meetings SET link = :link, last_update = :date WHERE id = :id";
		$statement = $this->pdo->prepare($sql);

		$statement->bindValue(':id', $id);
		$statement->bindValue(':link', $sacramental->getLink());
		$statement->bindValue(':date', $date);
		return $statement->execute();
	}

	/**
	 * @return Sacramental[]
	 */
	public function all():array
	{
		$query = $this->pdo->query("SELECT * FROM meetings;")->fetchAll(PDO::FETCH_ASSOC); 
		return array_map(function(array $sacramentalData){
			return new Sacramental(...$sacramentalData);
			
		}, $query);
	}

}