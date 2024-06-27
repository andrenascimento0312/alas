<?php

namespace Mvc\Controllers;
use PDO;

class Error404Controller implements Controller
{
	public function request(PDO $pdo):void
	{
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/404.php";
		require_once __DIR__ . "/../../views/footer.php";
		
	}
}