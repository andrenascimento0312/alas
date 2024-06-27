<?php

namespace Mvc\Controllers;

use Mvc\Repository\MeetingsRepository\ClassesRepository;
use PDO; 

class AdminAulasController implements Controller
{
	public function request(PDO $pdo):void
	{
		
		$request = new ClassesRepository($pdo);
		$classes = $request->all();
		
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/admin/aulas.php";		
		require_once __DIR__ . "/../../views/footer.php";
	}
}