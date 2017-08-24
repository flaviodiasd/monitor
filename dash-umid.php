<?php
  
  
  require_once("conecta_mqtt.php");
 
  $j=3;
  

  while($mqtt->proc() && $j>0){        
     $j--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }
  
  //$mqtt->close();
