<html>
<head>
<meta http-equiv="refresh" content="10">
</head>
<?php
      echo executeCommand($serverId, "tail /var/mpcp/servers/" . $serverId);
?>
</html>
