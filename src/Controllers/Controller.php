<?php
declare(strict_types=1);

namespace Mvc\Controllers;
use PDO;

interface Controller
{
	public function request(PDO $pdo):void;
}