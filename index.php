<?php
#include_once("conexao/conn.php");
#include_once(__DIR__ . 'conexao/conn.php');
require_once __DIR__ . '/conexao/conn.php';
require_once __DIR__ . '/Router.php';

$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

$router = new Router;
$router->run();

echo $requestUri;



?>
