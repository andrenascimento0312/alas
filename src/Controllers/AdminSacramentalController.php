<?php

namespace Mvc\Controllers;
use PDO; 

class AdminSacramentalController implements Controller
{
	public function request(PDO $pdo):void
	{
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/admin/sacramental.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}