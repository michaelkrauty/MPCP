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
<th width="30%">Filename</th>
<th width="10%">Type</th>
<th width="10%">Size</th>
<th width="10%">Modified</th>
<th width="20%">MD5</th>
<th width="20%">Controls</th>
</tr>
<?php

$serverId = "mpcp_0";



if ($handle = opendir('/var/mpcp/servers/' . $serverId)) {

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "<form action=\"./includes/fileexplorer.inc.php\" method=\"POST\" name=\"fileexplore\">";
	echo "<tr>";
        $fullpath = ('/var/mpcp/servers/' . $serverId . "/" . $entry);
	echo "<td> <a href=\"#\" onclick=\"fileexplore.submit($entry)\">$entry</a>  </td>";
	echo "<td>" . pathinfo($entry, PATHINFO_EXTENSION) . "</td>";
        echo "<td>"; try { echo filesize($fullpath); } catch (Exception $e) {echo "";} echo "</td>";
        echo "<td>"; try { echo filemtime($fullpath); } catch (Exception $e) {echo "";} echo "</td>";
	echo "<td>"; try { echo md5_file($fullpath); } catch (Exception $e) {echo "";} echo "</td>";
	echo "<td><span class=\"glyphicon glyphicon-minus\"> <span class=\"glyphicon glyphicon-wrench\"> <span class=\"glyphicon glyphicon-font\"> <span class=\"glyphicon glyphicon-search\"></td>";
	echo "</tr>";
    }
    closedir($handle);
    echo "</form>";
}

?>
</table>
</div>
<script language="javascript"> 
    function DoPost($fullpath){
    $.post("fileexplorer.inc.php", {$fullpath;} );  //Your values here..
    }
    </script>

