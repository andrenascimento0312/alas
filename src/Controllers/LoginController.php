<?php

namespace Mvc\Controllers;
use PDO; 

class LoginController implements Controller
{
	public function request(PDO $pdo):void
	{
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/login.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}