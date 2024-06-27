<?php

namespace Mvc\Controllers;

use Mvc\Repository\MeetingsRepository\ClassesRepository;
use PDO; 

class AtaSacramentalController implements Controller
{
	public function request(PDO $pdo):void
	{
		
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/generate/ata-sacramental.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}