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
    if(strpos($out,$serverId) == true){
      return true;
    }else{
      return false;
    }
  }
  
  function serverOnline($serverId){
    
  }
  
  function startServer($serverId, $memory, $jar){
    if(!screenOnline($serverId)){
      shell_exec("screen -dmS " . $serverId);
    }
#    if(!serverOnline){
      $command = "cd /var/mpcp/servers/" . $serverId;
      executeCommand($serverId, $command);
      $command = "java -Xmx" . $memory . "M -jar /var/mpcp/jar/" . $jar;
      executeCommand($serverId, $command);
#    }
  }
  
  function stopServer($serverId){
    if(screenOnline($serverId)){
      executeCommand($serverId, "stop");
      executeCommand($serverId, "exit");
    }else{
      
    }
  }
  
  function restartServer($serverId){
    if(screenOnline($serverId)){
      #restart
    }
  }
  
  function reloadServer($serverId){
    if(screenOnline($serverId)){
      executeCommand($serverId, "reload");
    }
  }
  
  function executeCommand($serverId, $command){
    if(screenOnline($serverId)){
      executeCommand($serverId, $command);
    }
  }
  
  function serverExists($serverId){
    $command = "ls /var/mpcp/servers";
    $out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
    if(strpos($out, $serverId) == true){
      return true;
    }else{
      return false;
    }
  }
?>
