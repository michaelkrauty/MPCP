<div class="well">
  <h2> File Explorer Mike</h2>

<?php

$serverId = "mpcp_0";
explode();
$ls = shell_exec("ls /var/mpcp/servers/$serverId");
echo nl2br($ls);

$array = explode($ls, "\n");

echo count($array);

?>
</div>
