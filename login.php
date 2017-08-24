<?php 
require_once ("banco-usuario.php");
require_once("logica-usuario.php");



$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
	$_SESSION["danger"] = "<div class='alert alert-danger' role='alert'>Usuário ou senha inválido.</div>";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "<div class='alert alert-success' role='alert'>Usuário logado com sucesso.</div>";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}
die();