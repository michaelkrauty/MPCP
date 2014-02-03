<?php include "../mpcp.php";
#  $serverIp = "carbon.mc.gl:25565";
  funciton getStatus("carbon.mc.gl"){
    include_once 'MinecraftServerStatus/status.class.php';
    $status = new MinecraftServerStatus();
    $response = $status->getStatus("carbon.mc.gl");
    if(!$response){
      echo "offline";
    }else{
      echo "online";
    }
  }
?>
