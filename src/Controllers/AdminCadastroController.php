<?php

namespace Mvc\Controllers;

use PDO; 

class AdminCadastroController implements Controller
{
	public function request(PDO $pdo):void
	{
		
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/admin/novo-usuario.php";		
		require_once __DIR__ . "/../../views/footer.php";
	}
}