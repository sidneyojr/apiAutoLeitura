<?php
include_once(__DIR__ . '/conexao/conn.php');
abstract class RouteSwitch
{
    protected function home()
    {
        require __DIR__ . '/endpoints/home/home.html';
    }
    
    protected function usuario()
    {
        require __DIR__ . '/endpoints/usuarios/listar_usuarios.php';
    }
    
    /*protected function leituras()
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
        
           
    }*/


   
}
?>
