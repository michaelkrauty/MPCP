<div class="well">
<h2> File Explorer </h2>
<div class="well">
<div class="btn-group">
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-home"></span></button>
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
<button type="button" class="btn btn-default">New Folder</button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-wrench"></span></button>
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-font"></span></button>
</div>
<div class="btn-group">
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-open"></span></button>
<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-save"></span></button>
</div>
<?php
/**
<div class="btn-group">
<button type="button" class="btn btn-default"></span> Zip</button>
<button type="button" class="btn btn-default"></span> Unzip</button>
</div>
**/
?>
<br></br>
<div id='fileexplorer' style='background:white;'>
<table class="table table-hover table-bordered">
<tr>
<th width="50px"></th>
<th width="300px">Filename</th>
<th width="100px">Type</th>
<th width="100px">Size</th>
<th width="100px">Modified</th>
<th width="300px">MD5</th>
<th width="100px">Controls</th>
</tr>
<?php

$serverId = "mpcp_0";

if ($handle = opendir('/var/mpcp/servers/' . $serverId)) {

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "<tr>";
	echo "<td></td>";
	echo "<td>$entry\n</td>";
	echo "<td>" . pathinfo($entry, PATHINFO_EXTENSION) . "</td>";
        echo "<td>" . filesize($entry) . "</td>";
	echo "</tr>";
    }

    /* This is the WRONG way to loop over the directory.
    while ($entry = readdir($handle)) {
        echo "</tr>";
	echo "<td></td>";
        echo "$entry\n";
	echo "</tr>";
    }*/

    closedir($handle);
}
?>
</table>
</div>
