<div class="well">
<h2> Memory Usage </h2>
<?php
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line) {
    	list($key, $val) = explode(":", $line);
	$meminfo[$key -1] = trim($val);
	echo "<br>";
	echo $meminfo[$key];
    }
?>
