<div class="well">
<h2> Plans List </h2>

<div id='userlist' style='background:white;'>
<table class="table table-hover table-bordered">
<tr>
<th width="10%">Plan ID</th>
<th width="10%">Plan Icon</th>
<th width="20%">Plan Name</th>
<th width="10%">Slots</th>
<th width="10%">Storage</th>
<th width="10%">Memory</th>
<th width="10%">Purchase</th>
</tr>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$result =  listPlans();

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['planid'] . "</td>";
  echo "<td> <img src=" . $row['icon'] . " height='64' width='64'> </td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['slots'] . "</td>";
  echo "<td>" . $row['storage'] . "</td>";
  echo "<td>" . $row['memory'] . "</td>";
  echo "<td>" . "<button type=\"button\" class=\"btn btn-primary\">Buy Now</button>" . "</td>";
  echo "</tr>";
  }
?>
</table>
</div>
</div>
