<?php
  include_once "../mpcp.php";
	include_once 'MinecraftServerStatus/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('pvp24.com');
	if(!$response) {
		echo "The Server is Offline!";
	} else {
		echo "The Server is Online!"
	}

?>
