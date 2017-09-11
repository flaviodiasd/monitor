<?php
require("phpMQTT2.php");

  
  $mqtt_u = new phpMQTT("iot.eclipse.org", 1883, "Umidade");

  if(!$mqtt_u->connect()){             
     exit(1);
  }
  
  $topics_u['rasp/umidade'] = array("qos"=>0, "function"=>"procmsg_u");

  $mqtt_u->subscribe($topics_u);

  $j=3;

  while($mqtt_u->proc() && $j>0){        
     $j--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }

  $mqtt_u->close();
  
