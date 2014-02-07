<div class="well">
<h2> Console </h2>
<?php
$serverId = "mpcp_0";
$logfile = "/var/mpcp/servers/" . $serverId . "/logs/latest.log";
echo "<div style=\"background-color:black; color:white; text-align:left; padding:10px; height:400px; overflow:scroll; font-size: 5;\">";
$file = fopen("$logfile", "r");
while (($line = fgets($file)) !== false) {
        echo "$line";
	echo "<br>";
}
fclose(logfile);
echo "</div>";

?>
