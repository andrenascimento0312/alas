<?php

namespace Mvc\Controllers;

use PDO;
use Mvc\Entity\User\Member;
use Mvc\Repository\UsersRespository\MemberRepository;


class registerMemberInSacramentalMeeting implements Controller
{

	public function request(PDO $pdo): void
	{
		date_default_timezone_set('America/Sao_Paulo');
		session_start();

		$_SESSION['sessionToken'] = true;
		

		// $sessionName = session_name();
		// $sessionId = session_id();
		// $lifetime =  time() + $plugLifetime;

		// setcookie($sessionName, $sessionId, $lifetime);

		$data = array_keys($_POST)[0];
		$data = json_decode($data);

		$name = $data->name;
		$people = $data->people;
		$phone = $data->phone;

		$phone = preg_replace('/[()_-]/', '', $phone);

		date_default_timezone_set('America/Sao_Paulo');
		$now = date('d/m/Y H:i:s');

		$_SESSION['sessionTime'] = $now;

		$sacramental = new MemberRepository($pdo);
		$user = new Member($name, $phone, 'member', 'attendance', $people, $now);
		$sacramental->add($user);

		http_response_code(200);

		$return = [
			// "sessionId" => $sessionId,
			// "sessionName" => $sessionName,
			// "lifeTime" => $lifetime,
			"sessionToken" => true
		];

		echo json_encode($return);
	}
}
