<?php
require_once("conecta.php");			

function buscaMqtt($conexao, $id) {
	$query = "select * from mqtt where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
	
}

function alteraMqtt($conexao, $id, $servidor, $porta, $usuario, $senha) {
	$query = "update mqtt set servidor = '{$servidor}', porta = {$porta}, usuario = '{$usuario}', senha= '{$senha}' where id = '{$id}'";
	return mysqli_query($conexao, $query);	
}

function listaMqtt($conexao) {
	$query = "select * from mqtt";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
?>