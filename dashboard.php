<?php 
require_once("cabecalho.php"); 

?>

<div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">TEMPERATURA</h3>
            </div>
            <div class="panel-body">
                <h1><?php include("dash_t.php");?> </h1>            
            </div>
        </div>
    </div>
<div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">UMIDADE</h3>
            </div>
            <div class="panel-body">
                <h1><?php include("dash_u.php");?> </h1>            
            </div>
        </div>
    </div>

<?php require_once("rodape.php"); ?>