<?php

namespace Mvc\Entity\Meeting;

class Classes extends Meeting
{
    private string $name;

    public function __construct(string $name, string $type, string $link) {
        // parent::__construct($type, $link); // Correção: use "parent" em vez de "this->parent"
        $this->name = $name;
        $this->type = $type;
        $this->link = $link;
    }

	public function getName():string
	{
		return $this->name;
	}

	// link do meet ou zoom
	protected function validateUrl(string $url):bool
	{
		if(!filter_var($url, FILTER_VALIDATE_URL)){
			echo "URL Inválida: $url";
			exit();
			return false;
		}

		return true;
	}

	protected function validateType(string $type):bool
	{
		if($type !== 'aula'){
			echo "Tipo invalido para objeto";
			exit();
			return false;
		}

		return true;
	}
}