<?php
include_once("../conn.php");
include_once("../date.php");

$dados = array();

$query = $pdo->query("SELECT *FROM tb_leituras WHERE mes = '$mesAtual'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i < count($res); $i++){
	
	foreach ($res[$i] as $key => $value) {}
		$dados= $res;
	}
	
	echo ($res) ?
	json_encode(array("code" => 1, "result" => $dados)):
	json_encode(array("code" => 0, message => "Data Not Found"))


?>

