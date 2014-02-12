<div class="well">

<h2> Plan List </h2>

<div id='userlist' style='background:white;'>
<table class="table table-hover table-bordered">
<tr>
<th width="1%">Plan ID</th>
<th width="1%">Plan Icon</th>
<th width="1%">Plan Name</th>
<th width="1%">Slots</th>
<th width="1%">Storage</th>
<th width="1%">Memory</th>
<th width="1%">Price</th>
<th width="1%">Purchase</th>
</tr>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$result =  listPlans();

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['planid'] . "</td>";
  echo "<td> <img src=" . $row['icon'] . " height='48' width='48'> </td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['slots'] . "</td>";
  echo "<td>" . $row['storage'] . "</td>";
  echo "<td>" . $row['memory'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . "<button type=\"button\" class=\"btn btn-primary\">Buy Now</button>" . "</td>";
  echo "</tr>";
  }
?>
</table>
</div>
