<?php

abstract class RouteSwitch
{
    protected function usuarios()
    {
        require __DIR__ . '/endpoints/usuarios/listar_usuarios.php';
    }
    
    protected function leituras()
    {
        require __DIR__ . '/endpoints/leituras/listar_leituras.php';
    }
    
    protected function postLeituras()
    {
        require __DIR__ . '/endpoints/leituras/leituras.php';
    }

    protected function defaultRoute()
    {
        http_response_code(404);
        require __DIR__ . '/404.html';
    }

   protected function home()
    {
        echo "Home page<br>";
        // Adicione aqui o código ou o arquivo a ser exibido para a página inicial
    }
}
?>
