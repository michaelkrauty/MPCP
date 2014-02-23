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
<br>
<?php

$serverId = "mpcp_0";

$ls = shell_exec("ls /var/mpcp/servers/$serverId");
echo $ls;

?>
