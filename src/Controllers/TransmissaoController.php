<?php

namespace Mvc\Controllers;
use PDO;

class TransmissaoController implements Controller
{
	public function request(PDO $pdo):void
	{
		session_start();

		if(!isset($_SESSION['sessionToken'])){
			header("Location: /sacramental/");
			exit();
		}
		
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/transmissao.php";
		
		require_once __DIR__ . "/../../views/footer.php";
	}
}