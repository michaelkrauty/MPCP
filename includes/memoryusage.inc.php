<div class="well">
<h2> Memory Usage </h2>
<?php
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line - 1) {
    	list($key, $val) = explode(":", $line);
	$meminfo[$key] = trim($val);
    }

    echo $meminfo["MemTotal"];
?>
