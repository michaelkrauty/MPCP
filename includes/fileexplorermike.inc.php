<div class="well">
  <h2> File Explorer Mike</h2>

<?php

$serverId = "mpcp_0";

$ls = shell_exec("ls /var/mpcp/servers/$serverId");
echo nl2br($ls);

?>
</div>
