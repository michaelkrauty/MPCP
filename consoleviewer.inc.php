<?php
  $x=1; 
  while($x<=5){
    $i = 1;
    while ($i <= 100) {
      if(shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n '$i p'") != ""){
        echo shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n '$i p'");
        echo "<br>";
      }
      $i++;
    }
    sleep(5);
    $x++;
  }
  echo "<br>";
?>
