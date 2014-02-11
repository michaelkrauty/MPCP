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
  echo "<td> <button name=\"start\" class='btn btn-small btn-success'>Start</button> <button name=\"stop\" class='btn btn-small btn-danger'>Stop</button>
                <button name=\"restart\" class='btn btn-small btn-warning'>Restart</button> <button name=\"reload\" class='btn btn-small btn-info'>Reload</button></td>";
  echo "</tr>";
  }
?>
</table>
</div>
</div>
