<html>
<head><title>Minecraft Log</title></head>
<body><pre>
<?php
$serverId = "mpcp_0";
$filepath = "/var/mpcp/$serverId/logs/latest.log";
$file = file($filepath);
foreach($file as $line) {
    echo $line."<br/>\n";
}
?>
</pre></body>
</html>
