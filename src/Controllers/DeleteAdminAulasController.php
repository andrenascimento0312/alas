<?php

namespace Mvc\Controllers;

use Mvc\Entity\Meeting\Classes;
use Mvc\Repository\MeetingsRepository\ClassesRepository;
use PDO; 

class DeleteAdminAulasController implements Controller
{
	public function request(PDO $pdo):void
	{
		
		$data = file_get_contents("php://input");
		$data = json_decode($data);
		$id = $data->id;
		$id = (int)$id;
		
		$request = new ClassesRepository($pdo);
		$class = new Classes('', 'class', '');
		$success = $request->remove($id, $class);

		if(!$success){
			http_response_code(204);
			echo json_encode(['deleted' => false]);
		}

		http_response_code(201);
		echo json_encode(['deleted' => true]);

		
	}


}