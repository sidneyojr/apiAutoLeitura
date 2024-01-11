<?php
#ini_set('display_errors', 1);
#error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__ . '/conexao/conn.php';

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
    public function run()
{
    $requestUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '';
    $route = trim($requestUri, '/');

    echo "Request URI: $requestUri<br>";
    echo "Route: $route<br>";

    $basePath = '/apiAutoLeitura';

    // Remove a parte fixa da rota
    $route = str_replace($basePath, '', $route);

    if ($route === '' || $route === 'index.php' || $route === 'apiAutoLeitura' || $route === 'endpoints') {
        $this->usuario();
    } /*else {
        $method = $route;
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            #$this->defaultRoute();
            echo "Route not found!<br>";
                #$this->notFound();
        }
    }*/
}
}

$router = new Router;
$router->run();
?>
