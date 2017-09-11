 <?php
 require("con_mqtt_u.php");

  function procmsg_u($topic,$msg){
    echo "Umidade ".$msg."%";
  }