<?php
funciton getStatus($serverIp){
  include_once 'MinecraftServerStatus/status.class.php';
  $status = new MinecraftServerStatus();
  $response = $status->getStatus($serverIp);
  if(!$response){
    echo "false";
  }else{
    echo "true";
  }
}

?>
