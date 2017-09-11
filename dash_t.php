 <?php
 require("con_mqtt_t.php");

  function procmsg_t($topic,$msg){
    echo "Temperatura $msg c•"."</br>";
  }

