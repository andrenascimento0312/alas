<?php

namespace Mvc\Controllers;

use Mvc\Entity\User\Administrator;
use Mvc\Repository\UsersRespository\AdministratorRepository;
use PDO; 

class addAdminUserController implements Controller
{
	public function request(PDO $pdo):void
	{
		
		$data = file_get_contents('php://input');
		$data = json_decode($data);
		$name = $data->name;
		$phone = $data->phone;
		$password = $data->password;

		$user = new Administrator($name, $phone, 'administrator', 'administrator', $password);
		$request = new AdministratorRepository($pdo);
		$success = $request->add($user);

		if(!$success){
			http_response_code(400);
			echo json_encode(['created' => false]);
		}

		http_response_code(201);
		echo json_encode(['created' => true]);

	}
}