<html>
<head><title>Minecraft Log</title></head>
<body><pre>
<?php
$serverId = "mpcp_0";
$filepath = "/var/mpcp/servers/$serverId/logs/latest.log";
$file = file($filepath);
foreach($file as $line) {
    echo $line."\n";
}
?>
</pre></body>
</html>
