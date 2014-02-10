<?php

#functions:
#online($serverId) returns true if screen is running with name that matches $serverId, else return false
#startServer($serverId) start a screen with the name $serverId
#stopServer($serverId) execute command "exit" in screen $serverId
#restartServer($serverId) does nothing yet
#reloadServer($serverId) execute command "reload" in screen $serverId
#executeCommand($serverId, $command) execute command $command in screen $serverId

#TEMP STUFF {
#}


  function screenOnline($serverId){
    $out = shell_exec("screen -list");
    if(strpos($out, $serverId) == true){
      return true;
    }else{
      return false;
    }
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
  
  function startServer($serverId, $memory, $jar){
    if(!screenOnline($serverId)){
    	if(!serverOnline($serverId)){
      	shell_exec("cd /var/mpcp/servers/" . $serverId . " && screen -dmS " . $serverId . " java -Xmx" . $memory . "M -jar /var/mpcp/jar/" . $jar);
    	}
    }
  }
  
  function stopServer($serverId){
    	$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"stop\r\"`\";");
  }
  
  function restartServer($serverId){
  	#temp
		$jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
		$memory = "1024";
		#/temp
  	stopServer($serverId);
  	while(screenOnline($serverId)){
  		sleep(0);
  	}
  	startServer($serverId, $memory, $jar);
  }
  
  function reloadServer($serverId){
    if(screenOnline($serverId)){
    	if(serverOnline($serverId)){
    		shell_exec("screen -x " . $serverId . " -X reload");
		    #$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"reload\r\"`\";");
    	}
    }
  }
  
  function executeCommand($serverId, $command){
    if(screenOnline($serverId)){
    	if(serverOnline($serverId)){
      	shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
    	}
    }
  }
  
  function serverExists($serverId){
    $command = "ls /var/mpcp/servers";
    if(strpos(shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";"), $serverId)){
      return true;
    }else{
      return false;
    }
  }
?>
