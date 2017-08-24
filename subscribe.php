<?php
  require("phpMQTT.php");
  require_once("banco-mqtt.php");

  
  $mqtt = listaMqtt($conexao);

  $host = $mqtt['servidor']; 
  $port = $mqtt['porta'];
  $username = $mqtt['usuario']; 
  $password = $mqtt['senha']; 



  $mqtt_t = new phpMQTT("iot.eclipse.org", 1883, "Temperatura");
  $mqtt_u = new phpMQTT("iot.eclipse.org", 1883, "Umidade");

  if(!$mqtt_t->connect()){              //(true,NULL,$username,$password)){
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
  }

  $mqtt_t->close();
  $mqtt_u->close();
  

/*
  function procmsg_t($topic,$msg){
    echo "Temperatura Recieved: $msg"."<br>";
  }

  function procmsg_u($topic,$msg){
    echo "Umidade Recieved: $msg"."<br>";
  }
*/
