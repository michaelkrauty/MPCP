<?php
  echo shell_exec("tail -n 50 /var/mpcp/servers/" . $serverId . "/logs/latest.log");
?>
