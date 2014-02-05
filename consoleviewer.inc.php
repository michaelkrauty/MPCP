<?php
$serverId = "mpcp_0"

$intlol = "1";

while ($i <= 100) {
echo shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n $i");
echo "\r\n";
$i++;
}
?>
