<?php
#  $out = shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log");
  $file = "/var/mpcp/servers/" . $serverId . "/logs/latest.log";
  $line = `sed -e "s/\\r/\\n/g" $file | tail -n 100`
?>
