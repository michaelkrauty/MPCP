<?php
$i = 1;
while ($i <= 100) {
$line = shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n $i");
$line .= "\r\n";
echo $line;
$i++;
}
?>
