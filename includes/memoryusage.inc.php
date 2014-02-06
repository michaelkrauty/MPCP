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
    echo "Memory Total : " . intval($memtotal * 0.000976563) . " MB";
    echo "<br>";
    echo "Used : " . intval($memused * 0.000976563) . " MB";
    echo "<br>";
    echo "Free : " . intval($memfree * 0.000976563) . " MB";
    echo "<br>";
    echo "Used : " . (intval($memused * 0.000976563)) / (intval($memtotal * 0.000976563) / 100) . " %";
    echo "Free : " . (intval($memfree * 0.000976563)) / (intval($memtotal * 0.000976563) / 100) . " %";
?>
