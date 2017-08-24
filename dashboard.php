<?php 
require_once("cabecalho.php"); 

?>
<div class="row">
    <div class="col-lg-6 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
               <?php include("dash-temp.php");?> 
            </div>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <div class="panel panel-default">
            <div class="panel-body">
               <?php include("dash-umid.php");?> 
            </div>
        </div>
    </div>
</div>

<?php require_once("rodape.php"); ?>