<?php 
require_once("cabecalho.php"); 		
require_once("banco-mqtt.php"); 
require_once("logica-usuario.php");
?>
<h1>Configurações MQTT</h1>

<div class="panel panel-default table-responsive">
		<table class="table table-bordered">
			<?php
				$mqtt = listaMqtt($conexao);
			?>
			<tr>
				<td class="col-xs-2"><b>Servidor</b></td>
				<td class="col-xs-1"><b>Porta</b></td>
				<td class="col-xs-1"><b>Usuário</b></td>
				<td class="col-xs-1"></td>
			</tr>
			<tr>
				<td class="col-xs-2"><?= $mqtt['servidor'] ?></td>
				<td class="col-xs-1"><?= $mqtt['porta'] ?></td>
				<td class="col-xs-1"><?= $mqtt['usuario'] ?></td>
				<form action="conf-mqtt.php" method="post">
				<input type="hidden" name="id" value="<?=$mqtt['id']?>">
				<td class="col-xs-1">
					<button class="btn btn-success btn-sm">Editar <span class="glyphicon glyphicon-pencil"></button>
				</td>
				</form>
			</tr>	
		</table>
</div>
<?php include("rodape.php"); ?>			
