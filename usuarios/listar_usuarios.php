<?php
include_once("../conexao/conn.php");

$dir = "../logs/logs.log";
$dados = array();

$query = $pdo->query("SELECT * FROM tb_usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
        
        $dados = $res;
    }
}

	$response = ($res) ?
    json_encode(array("code" => 1, "result" => $dados)) :
    json_encode(array("code" => 0, "message" => "Data Not Found"));

echo $response;

	$mensagem_log = ($res) ?
    "LOG: Data Found " . $response . " " . date("Y-m-d H:i:s") . PHP_EOL :
    "LOG: Data Not Found " . $response . " " . date("Y-m-d H:i:s") . PHP_EOL;

	file_put_contents($dir, $mensagem_log, FILE_APPEND);
?>
