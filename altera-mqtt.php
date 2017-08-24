<?php			
require_once("cabecalho.php"); 
require_once("banco-mqtt.php"); 

$id = $_POST['id'];
$servidor = $_POST['servidor'];
$porta = $_POST['porta'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(alteraMqtt($conexao, $id, $servidor, $porta, $usuario, $senha)) {
?>
	<div class="alert alert-success" role="alert"><p class="text-success">O Servidor <?= $servidor ?>, <?= $porta ?> foi alterado.</p></div>
	<?php header('refresh:4,lista-mqtt.php');?>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<div class="alert alert-danger" role="alert"><p class="text-danger">O Servidor <?= $servidor ?> não foi alterado: <?= $msg?></p></div>
<?php
}
?>

<?php include("rodape.php"); ?>