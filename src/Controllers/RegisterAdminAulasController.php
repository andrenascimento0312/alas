<?php

namespace Mvc\Controllers;

use Mvc\Entity\Meeting\Classes;
use Mvc\Repository\MeetingsRepository\ClassesRepository;
use PDO; 

class RegisterAdminAulasController implements Controller
{
	public function request(PDO $pdo):void
	{
		$data = file_get_contents("php://input");
		$data = json_decode($data);
		$className = $data->className;
		$classLink = $data->classLink;
		
		$request = new ClassesRepository($pdo);
		$class = new Classes($className, 'class', $classLink);
		$success = $request->add($class);

		if(!$success){
			http_response_code(204);
			echo json_encode(['created' => false]);
		}

		http_response_code(201);
		echo json_encode(['created' => true]);

		
	}


}