<?php
  include_once "../mpcp.php";
	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$serverIp = "fdsfe";
	$response = $status->getStatus($serverIp);
	if(!$response){
		echo "OFFLINE";
	}else{
		echo "ONLINE";
	}
?>
