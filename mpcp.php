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
      $online = true;
    }else{
      $online = false;
    }
    return $online;
  }
    
  function startServer($serverId){
    if(!online($serverId)){
      shell_exec("screen -dmS " . $serverId);
    }else{
      
    }
  }
  
  function stopServer($serverId){
    if(online($serverId)){
      shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"exit\r\"`\";");
    }else{
      
    }
  }
  
  function restartServer($serverId){
    if(online($serverId)){
      #restart
    }
  }
  
  function reloadServer($serverId){
    if(online($serverId)){
      shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"reload\r\"`\";");
    }
  }
  
  function executeCommand($serverId, $command){
    if(online($serverId)){
      shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
    }
  }
  
  function test($serverId, $command){
    if(online($serverId)){
      $out = shell_exec("screen -x " . $serverId . " -p 0 -X stuff \"`printf \"" . $command . "\r\"`\";");
      return $out;
    }
  }
?>
