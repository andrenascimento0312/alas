<?php

namespace Mvc\Controllers;

use Mvc\Entity\Meeting\Sacramental;
use Mvc\Repository\MeetingsRepository\SacramentalRepository;
use PDO; 

class UpdateAdminSacramentalController implements Controller
{
	public function request(PDO $pdo):void
	{
		$data = file_get_contents("php://input");
		$data = json_decode($data);
		$sacramentalLink = $data;
		
		$request = new SacramentalRepository($pdo);
		$sacramental = new Sacramental('sacramental', $sacramentalLink);
		$success = $request->update(1, $sacramental);

		if(!$success){
			http_response_code(204);
			echo json_encode(['updated' => false]);
		}

		http_response_code(200);
		echo json_encode(['updated' => true]);

		
	}


}