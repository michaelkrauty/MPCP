<h2> Processor Usage </h2>

<?php
/* Gets individual core information */
function GetCoreInformation() {
        $data = file('/proc/stat');
        $cores = array();
        foreach( $data as $line ) {
                if( preg_match('/^cpu[0-9]/', $line) )
                {
                        $info = explode(' ', $line );
                        $cores[] = array(
                                'user' => $info[1],
                                'nice' => $info[2],
                                'sys' => $info[3],
                                'idle' => $info[4]
                        );
                }
        }
        return $cores;
}
/* compares two information snapshots and returns the cpu percentage */
function GetCpuPercentages($stat1, $stat2) {
        if( count($stat1) !== count($stat2) ) {
                return;
        }
        $cpus = array();
        for( $i = 0, $l = count($stat1); $i < $l; $i++) {
                $dif = array();
                $dif['user'] = $stat2[$i]['user'] - $stat1[$i]['user'];
                $dif['nice'] = $stat2[$i]['nice'] - $stat1[$i]['nice'];
                $dif['sys'] = $stat2[$i]['sys'] - $stat1[$i]['sys'];
                $dif['idle'] = $stat2[$i]['idle'] - $stat1[$i]['idle'];
                $total = array_sum($dif);
                $cpu = array();
                foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
                $cpus['cpu' . $i] = $cpu;
        }
        return $cpus;
}


/* get core information (snapshot) */
$stat1 = GetCoreInformation();
/* sleep on server for one second */
sleep(1);
/* take second snapshot */
$stat2 = GetCoreInformation();
/* get the cpu percentage based off two snapshots */
$data = GetCpuPercentages($stat1, $stat2);

foreach( $data as $k => $v ) {
	echo "<p>";
        echo $v['user'] . ','. "<br>";
	
	$i = $v['user'];
	if ($i > 1) {
	echo "<div class=\"progress progress-striped\">";
	echo "<br>";
	echo "<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"\". $i . \"\"aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\"\" . $i . \"\"%\">";
	echo "<span class="sr-only">40% Complete (success)</span>"
	echo "</div>";
	echo "</div>";
}
}

?>
