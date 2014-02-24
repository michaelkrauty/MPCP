<div class="well">
  <h2> File Explorer Mike</h2>

<?php

$serverId = "mpcp_0";
$ls = shell_exec("ls /var/mpcp/servers/$serverId");
echo count("Total items: ".explode("\n", $ls) - 1 . "<br>");

echo nl2br($ls);


?>
</div>
