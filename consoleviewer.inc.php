<?php
  $cmd = shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log");
  $out = str_replace("\r","\n",$cmd);
  echo $out;
?>
