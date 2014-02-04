<?php
  include_once "../mpcp.php";
	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('carbon.mc.gl');
	if(!$response){
		echo "OFFLINE";
	}else{
		echo"ONLINE";
	}
?>
