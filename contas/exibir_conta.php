<?php
include_once("../conexao/conn.php");
$id=1;

$dados = array();

$query = $pdo->query("SELECT tb_usuarios.nome, tb_usuarios.id, tb_usuarios.local,tb_contas.mesreferencia, tb_contas.dataemissao, tb_contas.datavencimento, tb_contas.valorconta, tb_contas.valormetrocubico, tb_contas.leituraatual, tb_contas.leituraanterior, tb_contas.mensagem
FROM tb_contas
INNER JOIN tb_usuarios ON tb_contas.codigouser = tb_usuarios.id
WHERE tb_usuarios.id = $id
ORDER BY tb_usuarios.nome, tb_usuarios.id, tb_usuarios.local;");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i < count($res); $i++){
	
	foreach ($res[$i] as $key => $value) {}
		$dados= $res;
	}
	
	echo ($res) ?
	json_encode(array("code" => 1, "result" => $dados)):
	json_encode(array("code" => 0, message => "Data Not Found"))


?>
