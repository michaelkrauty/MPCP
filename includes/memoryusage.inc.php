<div class="well">
<h2> Memory Usage </h2>
<?php
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line) {
    	list($key, $val) = explode(":", $line);
	$meminfo[$key] = trim($val);
    }

    $meminfo["MemTotal"];
    $meminfo["MemFree"];

    $memused = ($meminfo["MemTotal"] - $meminfo["MemFree"]);
    $memfree = substr($meminfo["MemFree"], 0, -3);
    $memtotal = substr($meminfo["MemTotal"], 0, -3);
    echo "<br>";
    echo "Memory Used : " . $memused;
    echo "<br>";
    echo "Memory Free : " . $memfree;
    echo "<br>";
    echo "Memory Total : " . $memtotal;

?>


