<?php

namespace Mvc\Controllers;

use Mvc\Repository\MeetingsRepository\ClassesRepository;
use PDO; 

class FormAulasController implements Controller
{
	public function request(PDO $pdo):void
	{
		/** @var ?ClassesRepository $class */
		
		$class = null;
		if($_COOKIE['idClassMeetingForEdit']){
			$id = (int)$_COOKIE['idClassMeetingForEdit'];
			$request = new ClassesRepository($pdo);
			$class = $request->find($id);
		}		
	
		require_once __DIR__ . "/../../views/header.php"; 
		require_once __DIR__ . "/../../views/pages/admin/form-aula.php";
		require_once __DIR__ . "/../../views/footer.php";
	}
}