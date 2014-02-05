<?php
  include "manage.php";
  echo shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log");
?>
