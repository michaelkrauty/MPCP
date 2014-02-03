<?php include "../mpcp.php";
  $serverIp = "carbon.mc.gl:25565";
  funciton getStatus($serverIp){
    include_once 'MinecraftServerStatus/status.class.php';
    $status = new MinecraftServerStatus();
    $response = $status->getStatus($serverIp);
    if(!$response){
      echo "offline";
    }else{
      echo "online";
    }
  }
?>
