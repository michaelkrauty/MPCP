<div class="well">
<h2> File Explorer Mike</h2>

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
</div>
