<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
 ?>		
<?php if(usuarioEstaLogado()) {?>
		<p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Deslogar</a></p>
<?php } else {?>
<div class="row">
    <div class="col-md-6 col-md-offset-3" align="center">
        <div class="panel panel-default panel-custom">
			<div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
					<form action="login.php" method="post">
						<table>
							<tr>
								<td>
								<label for="email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input class="form-control" type="email" name="email" placeholder="Endeceço de email">
								</div>
								<label for="senha" class="col-sm-3 control-label">Senha</label>
								<div class="col-sm-9">
									<input class="form-control" type="password" name="senha" placeholder="Senha">
								</div>
								<div class="col-sm-offset-3 col-sm-9">
								 	<button class="btn btn-lg btn-success btn-block">Login</button>
								</div>
								<td>
							</tr>
						</table>	
					</form>
				<?php } ?>
				</div>
		   </div>
		</div>
	</div>
<?php include("rodape.php"); ?>			
