<div class="well">
<h2> User List </h2>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

echo $result;

while($row = mysqli_fetch_array($result))
  {
  echo $row['userid']
  echo "<br>";
  echo $row['email']
  echo "<br>";
  echo $row['password']
  echo "<br>";
  echo $row['mcusername']
  echo "<br>";
  echo $row['salt']
  echo "<br>";
  echo "<br>";
  }


?>
</div>
