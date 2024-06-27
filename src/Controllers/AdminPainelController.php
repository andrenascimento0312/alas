<?php

namespace Mvc\Controllers;
use PDO; 

class AdminPainelController implements Controller
{
	public function request(PDO $pdo):void
	{

		$username = 'Fulano(a)';
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/admin/painel.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}