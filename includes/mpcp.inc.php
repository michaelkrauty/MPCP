<?php

#functions:
#online($serverId) returns true if screen is running with name that matches $serverId, else return false
#startServer($serverId) start a screen with the name $serverId
#stopServer($serverId) execute command "exit" in screen $serverId
#restartServer($serverId) does nothing yet
#reloadServer($serverId) execute command "reload" in screen $serverId
#executeCommand($serverId, $command) execute command $command in screen $serverId

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
      	shell_exec("cd /var/mpcp/servers/" . $serverId);
      	shell_exec("screen -dmS " . $serverId . " java -Xmx" . $memory . "M -jar /var/mpcp/jar/" . $jar);
    	}
    }
  }
  
  function stopServer($serverId){
  	
    if(serverOnline($serverId)){
    	$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"stop\r\"`\";");
    	while(serverOnline($serverId)){
    		sleep(1);
    	}
    }
    if(screenOnline($serverId)){
    	$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"exit\r\"`\";");
    }
  }
  
  function restartServer($serverId){
  	if(serverOnline($serverId)){
  		
  	}
    if(screenOnline($serverId)){
    	
    }
  }
  
  function reloadServer($serverId){
    if(screenOnline($serverId)){
    	if(serverOnline($serverId)){
		    $out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"reload\r\"`\";");
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
