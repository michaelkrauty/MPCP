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
    echo "Used : " . (intval($memtotal * 0.000976563) / 100 * (intval($memused * 0.000976563)) . " %"; 
    echo "Free : " . (intval($memtotal * 0.000976563) / 100 * (intval($memfree * 0.000976563)) . " %";

?>

<table class="table table-striped">
        <tr>
        <th width= "20%">Ram Usage</th>
        <th width= "80%"> Usage % <th>
        </tr>
        <tr>
	<div class="progress progress-striped">
  	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    	<span class="sr-only">40% Complete </span>
  	</tr>
	</div>
</div>
