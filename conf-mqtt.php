<?php 
require_once("cabecalho.php"); 		
require_once("banco-mqtt.php");
require_once("logica-usuario.php"); 

$id=$_POST['id'];
$mqtt=buscaMqtt($conexao, $id);
?>

<h1>Alterando Configurações</h1>
	<form action="altera-mqtt.php" method="post">
		<input type="hidden" name="id" value="<?=$mqtt['id']?>">
		<table class="table">
		<?php include("mqtt-formulario-base.php"); ?>
		<tr>
			<td><button class="btn btn-success" type="submit">Alterar</button></td>
		</tr>
		
</table>	
<?php include("rodape.php"); ?>	