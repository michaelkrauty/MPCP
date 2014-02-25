<div class="well">
  <h2> File Explorer Mike</h2>

<?php

$serverId = "mpcp_0";
echo "Total items: ".(count(explode("\n", shell_exec("ls /var/mpcp/servers/$serverId")))-1)."<br>";

echo nl2br($ls);


?>
</div>
