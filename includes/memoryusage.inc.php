<div class="well">
<h2> Memory Usage </h2>
<?php
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line) {
    	list($key, $val) = explode(":", $line);
	$meminfo[$key] = trim($val);
    }
    $memfree = intval(substr($meminfo["MemFree"], 0, -3) * 0.000976563)
    $memtotal = intval(substr($meminfo["MemTotal"], 0, -3) * 0.000976563);
    $memused = intval($memtotal - $memfree);
    $memusedper = intval($memused * intval($memtotal / 100));
    $memfreeper = intval($memfree * intval($memtotal / 100));

    echo $memfree;
    echo $memtotal;
    echo $memused;
    echo $memusedper;
    echo $memfreeper;









?>
