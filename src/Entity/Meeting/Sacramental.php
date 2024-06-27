<?php

namespace Mvc\Entity\Meeting;

class Sacramental extends Meeting
{
	public function __construct(string $type, string $link) {

		if(!$this->validateType($type)){
			return;
		}
		$this->type = $type;

		if(!$this->validateUrl($link)){
			return;
		}

		$this->link = $link;
	}

	protected function validateType(string $type):bool
	{
		if($type !== 'sacramental'){
			echo "Tipo invalido para objeto";
			exit();
			return false;
		}

		return true;
	}

	// link do youtube
	protected function validateUrl(string $url):bool
	{
		if(!filter_var($url, FILTER_VALIDATE_URL)){
			echo "URL Inválida: $url";
			exit();
			return false;
		}

		return true;
	}
	
}