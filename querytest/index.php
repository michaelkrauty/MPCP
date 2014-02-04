<?php
  include_once "../mpcp.php";
	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('carbon.mc.gl');
	if(!$response){
		echo "The Server is Offline!";
	}else{
		echo"<img width=\"64\" height=\"64\" src=\"".$response['favicon']."\" /> <br>
		The Server ".$response['hostname']." is running on ".$response['version']." and is online,
		currently are ".$response['players']." players online
		of a maximum of ".$response['maxplayers'].". The motd of the server is '".$response['motd']."'. 
		The server has a ping of ".$response['ping']." milliseconds.";
	}
?>
