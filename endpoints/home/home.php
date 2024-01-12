<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
header('WWW-Authenticate: Basic realm="Área Restrita"');
exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="icon" href="/home/sidney/Imagens/agua-da-torneira-isolada-no-fundo-branco/icon.png">
    <title>AutoLeitura</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>AutoLeitura Nova Versão para Homologação</h3>
    <br>
    <br>
    <p>Logo você poderá baixar seu .apk aqui</p>
    <br>
    <br>
    <p>Veja a versão web<a href="https://auto-leitura-git-develop-sidneyo-ifspedubr.vercel.app/">AutoLeitura</a>.</p>
    
  </body>
</html>