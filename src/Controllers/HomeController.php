<?php

namespace Mvc\Controllers;
use PDO;

class HomeController implements Controller
{
	public function request(PDO $pdo):void
	{
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/home.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}