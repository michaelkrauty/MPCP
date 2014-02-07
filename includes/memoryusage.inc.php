<div class="well">
<h2> Memory Usage </h2>
<?php
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line) {
    	@list($key, $val) = @explode(":", $line);
	$meminfo[$key] = trim($val);
    }
    $memfree = intval(substr($meminfo["MemFree"], 0, -3) * 0.000976563);
    $memtotal = intval(substr($meminfo["MemTotal"], 0, -3) * 0.000976563);
    $memused = intval($memtotal - $memfree);
    $memusedper = intval($memused / (intval($memtotal / 100)));
    $memfreeper = intval($memfree / (intval($memtotal / 100)));	
    echo "<br>";
    echo "<table class=\"table table-striped\">";
    echo "<tr><th width=\"30%\" <b>Memory Free :</b> " . $memfree . " MB</th>";
    echo "<th width=\"30%\" <b>Memory Total :</b> " . $memtotal . " MB</th>";
    echo "<th width=\"30%\" <b>Memory Used :</b> " . $memused . " MB <th></tr></table>";
        echo "<tr>";
        echo "<td>";
        echo "</td><td>";
        if ($memusedper > 70) {
        echo "<div class=\"progress\">";
        echo "<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"{$memusedper}\"
        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{$memusedper}%\">";
        echo "</div>";
        echo "</div>";
        }
        else if ($memusedper > 50) {
        echo "<div class=\"progress\">";
        echo "<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"{$memusedper}\"
        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{$memusedper}%\">";
        echo "</div>";
        echo "</div>";
        }
        else {
        echo "<div class=\"progress\">";
        echo "<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"{$memusedper}\"
        aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{$memusedper}%\">";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
	}
?>
