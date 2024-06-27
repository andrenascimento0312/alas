<?php

use Mvc\Controllers\Controller;
use Mvc\Controllers\Error404Controller;

use Dompdf\Dompdf;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/conexao.php';


$routes = require_once __DIR__ . '/routes.php';

$parametro = $_SERVER['REQUEST_URI'];
$parametro = str_replace("/alas", "", $parametro);
// $_SERVER['PATH_INFO']

$pathInfo = $parametro ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];
$key = "$httpMethod|$pathInfo";

// var_dump($parametro);
// exit();

if(array_key_exists($key, $routes)){
	$controllerClass = $routes["$httpMethod|$pathInfo"];
	$controller = new $controllerClass();

} else {
	$controller = new Error404Controller();
}

/** @var Controller $controler */
$controller->request($pdo);
