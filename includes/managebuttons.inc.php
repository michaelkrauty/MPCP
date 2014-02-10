<?php
  if(count($_POST) > 0 && isset($_POST['start'])) {
    $memory = 1024;
    $jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
    startServer($serverId, $memory, $jar);
  }
  if(count($_POST) > 0 && isset($_POST['stop'])) {
    stopServer($serverId);
  }
  if(count($_POST) > 0 && isset($_POST['restart'])) {
    restartServer($serverId);
  }
  if(count($_POST) > 0 && isset($_POST['reload'])) {
    reloadServer($serverId);
  }
?>
