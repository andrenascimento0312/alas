<?php

namespace Mvc\Entity\Meeting;

abstract class Meeting{

	protected string $type;
	protected string $link;

	public function __construct(string $type, string $link)
    {
        $this->type = $type;
        $this->link = $link;
    }


	public function getType():string
	{
		return $this->type;
	}


	public function getLink():string
	{
		return $this->link;
	}

	abstract protected function validateUrl(string $url):bool;
	
	abstract protected function validateType(string $url):bool;
	
}