<div class="well">
<h2> Server List </h2>

<div id='serverlist' style='background:white;'>
<table class="table table-hover table-bordered">
<tr>
<th width="1%">Server ID</th>
<th width="1%">Name</th>
<th width="1%">Owner</th>
<th width="1%">IP</th>
<th width="1%">Port</th>
<th width="1%">Players </th>
<th width="1%">Server Status </th>
<th width="10%">Quick Commands </th>
</tr>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'printMCIcon.inc.php';

$result =  listServers();

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['serverid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['owner'] . "</td>";
  echo "<td>" . $row['ip'] . "</td>";
  echo "<td>" . $row['port'] . "</td>";
  echo "<td>" . "players" . "</td>";
  echo "<td>" . "serverstatus" . "</td>";
  echo "<td>" . "<button type=\"button\" class=\"btn btn-warning\">Edit</button> <button type=\"button\" class=\"btn btn-danger\">Delete</button> " . "</td>";
  echo "</tr>";
  }
?>
</table>
</div>
</div>
