<?php

	function screenOnline($serverId){
		$out = shell_exec("screen -list");
		return strpos($out, $serverId);
	}

	function serverOnline($serverId){
			#temp
			$serverIp = "dominationvps.com";
			$serverPort = "6070";
			#/temp
		include_once 'status.class.php';
		$status = new MinecraftServerStatus();
		$response = $status->getStatus($serverIp, $serverPort);
		if($response){
			return true;
		}else{
			return false;
		}
	}
  
	function startServer($serverId, $memory, $jar, $port, $mcVersion){
		if(!screenOnline($serverId)){
			if(!serverOnline($serverId)){
				shell_exec("cd /var/mpcp/servers/$serverId && screen -dmS $serverId java -Xmx $memory\M -jar /var/mpcp/jar/$jar --port $port");
			}
		}
	}

	function stopServer($serverId){
		$out = shell_exec("screen -x $serverId -p 0 -X stuff \"`printf \"stop\r\"`\";");
	}

	function restartServer($serverId){
			#temp
			$jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
			$memory = "1024";
			$port = "6070";
			#/temp
		stopServer($serverId);
		while(screenOnline($serverId)){
			sleep(0);
		}
		startServer($serverId, $memory, $jar, $port, 1.7);
	}
	function reloadServer($serverId){
		if(screenOnline($serverId)){
			if(serverOnline($serverId)){
				$out = shell_exec("screen -x $serverId -p 0 -X stuff \"`printf \"reload\r\"`\";");
			}
		}
	}
  
	function executeCommand($serverId, $command){
		if(screenOnline($serverId)){
			if(serverOnline($serverId)){
				shell_exec("screen -x $serverId -p 0 -X stuff \"`printf \"$command\r\"`\";");
			}
		}
	}

	function serverExists($serverId){
		$command = "ls /var/mpcp/servers";
		return strpos(shell_exec($command), $serverId);
	}

	function createBackup($serverId){
		$date = date("j-n-Y_G:i");
		if(!file_exists("/var/mpcp/backups/$serverId")){
			shell_exec("mkdir /var/mpcp/backups/$serverId");
		}
		shell_exec("cd /var/mpcp/servers/$serverId && zip $date * && mv $date.zip /var/mpcp/backups/$serverId/");
	}

	function restoreBackup($serverId, $backupName){
		if(file_exists("/var/mpcp/backups/$serverId/$backupName")){
			createBackup($serverId);
			shell_exec("rm -rf /var/mpcp/servers/$serverId/* && mv /var/mpcp/backups/$serverId/$backupName /var/mpcp/servers/$serverId/ && cd /var/mpcp/servers/$serverId && unzip $backupName && rm -f $backupName");
		}
	}
	
	function deleteBackup($serverId, $backupName){
		if(file_exists("/var/mpcp/backups/$serverId/$backupName")){
			shell_exec("rm -f /var/mpcp/servers/$serverId/$backupName");
		}
	}
	
	function getJarVersion($jar){
		if("craftbukkit-" == substr($jar, 0, 12)){
			return substr($jar, 12, 5);
		}
		if("spigot-" == substr($jar, 0, 7)){
			return substr($jar, 7, 5);
		}
		if("minecraft_server." == substr($jar, 0, 17)){
			return substr($jar, 17, 5);
		}
		else{
			return "ERROR in \"getJarVersion($jar)\" (jar not found!)";
		}
	}
?>
