<?php
require("phpMQTT.php");
require("banco-mqtt.php");

$mqtt = listaMqtt($conexao);

$host = $mqtt['servidor']; 
$port = $mqtt['porta'];
$username = $mqtt['usuario']; 
$password = $mqtt['senha']; 

  $mqtt_t = new phpMQTT($host, $port, "Temperatura");
  $mqtt_u = new phpMQTT($host, $port, "Umidade");

  if(!$mqtt_t->connect()){            
     exit(1);
  }
  if(!$mqtt_u->connect()){             
     exit(1);
  }
  
  $topics_t['rasp/temperatura'] = array("qos"=>0, "function"=>"procmsg_t");
  $topics_u['rasp/umidade'] = array("qos"=>0, "function"=>"procmsg_u");

  $mqtt_t->subscribe($topics_t);
  $mqtt_u->subscribe($topics_u);

  $i=3;
  $j=3;

  while($mqtt_t->proc() && $i>0){        
     $i--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }

  while($mqtt_u->proc() && $j>0){        
     $j--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }

  $mqtt_t->close();
  $mqtt_u->close();
  
