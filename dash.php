 <?php
 require("con_mqtt.php");

  function procmsg_t($topic,$msg){
    echo "Temperatura $msg c•"."</br>";
  }

  function procmsg_u($topic,$msg){
    echo "Umidade ".$msg."%";
  }