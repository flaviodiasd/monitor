<?php

require("phpMQTT.php");
require_once("banco-mqtt.php");

$mqtt = listaMqtt($conexao);

  $host = $mqtt['servidor']; 
  $port = $mqtt['porta'];
  $username = $mqtt['usuario']; 
  $password = $mqtt['senha']; 


   $mqtt = new phpMQTT($host, $port, "Monitor");

if(!$mqtt->connect()){              //(true,NULL,$username,$password)){
        exit(1);
  }

  $topics_t['rasp/temperatura'] = array("qos"=>0, "function"=>"procmsg");
  //$topics_u['rasp/umidade'] = array("qos"=>0, "function"=>"procmsg");


  $mqtt->subscribe($topics_t);
  //$mqtt->subscribe($topics_u);