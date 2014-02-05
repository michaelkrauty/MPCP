<div class="well">
<h2> Memory Usage </h2>
<?php

function getSystemMemInfo() 
{       
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    foreach ($data as $line) {
    	list($key, $val) = explode(":", $line);
    	$meminfo[$key] = trim($val);
    }
    return $meminfo;
}
var_dump( getSystemMemInfo() );

?>
</div>
