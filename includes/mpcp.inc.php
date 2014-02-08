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
	  if(!$response) {
  	  return false;
	  } else {
      return true;
  	}
  }
  
  function startServer($serverId, $memory, $jar){
    if(!screenOnline($serverId)){
      shell_exec("screen -dmS " . $serverId);
    }
    if(!serverOnline){
      $command = "cd /var/mpcp/servers/" . $serverId;
      $out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
      $command = "java -Xmx" . $memory . "M -jar /var/mpcp/jar/" . $jar;
      $out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
    }
  }
  
  function stopServer($serverId){
    if(screenOnline($serverId)){
    	if(serverOnline($serverId)){
    		$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"stop\r\"`\";");
    		$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"exit\r\"`\";");
    	}else{
    		$out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"exit\r\"`\";");
    	}
    }else{
      #do nothing
    }
  }
  
  function restartServer($serverId){
    if(screenOnline($serverId)){
    	if(serverOnline($serverId)){
      	#restart
    	}
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
