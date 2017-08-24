<?php 
require_once("cabecalho.php"); 
require_once("subscribe.php");


function procmsg_t($topic,$msg){    
?>
<body id="body">

<div class="col-sm-6">
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


<script>


window.onload = function(){
		var g2 = new JustGage({
				id: 'g1',
				value: <?php  echo $msg; ?>,
				min: 0,
				max: 100,
				symbol: 'C°',
				title: "Temperatura",
				pointerOptions: {
				toplength: 8,
				bottomlength: 8,
				bottomwidth: 12,
				color: '#8e8e93',
				stroke: '#ffffff',
				stroke_width: 2,
				stroke_linecap: 'round'
				},
				gaugeWidthScale: 0.8,
				counter: true
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