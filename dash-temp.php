<?php
  session_start();
  require("phpMQTT.php");
  require_once("banco-mqtt.php");
  
  
  $mqtt = listaMqtt($conexao);

  $host = $mqtt['servidor']; 
  $port = $mqtt['porta'];
  $username = $mqtt['usuario']; 
  $password = $mqtt['senha']; 



  $mqtt_t = new phpMQTT("iot.eclipse.org", 1883, "Temperatura");
//  $mqtt_u = new phpMQTT("iot.eclipse.org", 1883, "Umidade");

  if(!$mqtt_t->connect()){              //(true,NULL,$username,$password)){
    exit(1);
  }
  //if(!$mqtt_u->connect()){             
  //  exit(1);
  //}


  $topics_t['rasp/temperatura'] = array("qos"=>0, "function"=>"procmsg_t");
  //$topics_u['rasp/umidade'] = array("qos"=>0, "function"=>"procmsg_u");
  $mqtt_t->subscribe($topics_t);
  //$mqtt_u->subscribe($topics_u);

  $i=3;
  //$j=3;
  

  while($mqtt_t->proc() && $i>0){        
     $i--;
    // echo "<meta http-equiv='refresh' content='5'>";
  }
 

  //while($mqtt_u->proc() && $j>0){        
  //   $j--;
  //}

  $mqtt_t->close();
  //$mqtt_u->close();
  


  function procmsg_t($topic,$msg){
    echo"<body id='body'>
            <style>

                  #g1 {
                    width: 150px;
                    height: 150px;
                    display: inline-block;
                  }

            </style>
            <div id='g1'></div> 
            <script>
              
          window.onload = function(){
          var g2 = new JustGage({
              id: 'g1',
              value: $msg,
              min: 0,
              max: 100,
              symbol: 'C°',
              title: 'Temperatura'
          })
          setTimeout(JustGage, 5000);
          ;
          setInterval(function() {
          g1.refresh(getRandomInt(50, 100));
              }, 100);
          };


          </script>
          </body>";
  }

  //function procmsg_u($topic,$msg){
   
  //}

