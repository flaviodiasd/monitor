<?php 
require_once("cabecalho.php"); 
require_once("subscribe.php");


function procmsg_t($topic,$msg){    
?>
<body id="body">
<style>

      #g1 {
        width: 320px;
        height: 320px;
        display: inline-block;
        margin: 1em;
      }

</style>

    <div class="col-sm-10">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                <h1>
                 <div id="g1"></div> 
                </h1>
            </div>
        </div>
    </div>

    <!-- /.col-sm-4 -->
    <div class="">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                <h1>2</h1>
            </div>
        </div>
    </div>


    <!-- /.col-sm-4 -->
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                <h1>3</h1>
            </div>
        </div>
    </div>
    <!-- /.col-sm-4 -->
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                <h1>4</h1>            
            </div>
        </div>
    </div>




<script>


window.onload = function(){
		var g2 = new JustGage({
				id: 'g1',
				value: <?php  echo $msg; ?>,
				min: 0,
				max: 100,
				symbol: 'C°',
				title: "Temperatura"
		})
		setTimeout(JustGage, 5000);
		;
		setInterval(function() {
		 g1.refresh(getRandomInt(50, 100));
        }, 100);
};


</script>
</body>
<?php }?>


<?php require_once("rodape.php"); ?>