<?php
  
  require_once("conecta_mqtt.php");
  
  $i=3;
 
  while($mqtt->proc() && $i>0){        
     $i--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }
 
 //$mqtt->close();
 
 include("exibevalores.php");