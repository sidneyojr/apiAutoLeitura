<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
    public function run()
    {
        $requestUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '';
        $route = trim($requestUri, '/');

        #echo "Request URI: $requestUri<br>";
        #echo "Route: $route<br>";

        if ($route === '' || $route === 'index.php' || $route === 'endpoints') {
            $this->usuarios();
            #$this->leituras();
        }
         #if ($route === '' || $route === 'index.php' || $route === 'endpoints') {
            #$this->usuarios();
           # $this->leituras();
        #}
         else {
            $method = $route;
            if (method_exists($this, $method)) {
                $this->$method();
            } else {
                #echo "Route not found!<br>";
                $this->defaultRoute();
            }
        }
    }
}

$router = new Router;
$router->run();
?>
