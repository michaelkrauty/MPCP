<div class="well">
<h2> User List </h2>

<div id='userlist' style='background:white;'>
<table class="table table-hover table-bordered">
<tr>
<th width="1%">UID</th>
<th width="1%">Avatar</th>
<th width="1%">Email</th>
<th width="1%">Password</th>
<th width="1%">Minecraft Name</th>
<th width="1%">Salt</th>
<th width="1%">Emeralds</th>
<th width="10%">Controls</th>
</tr>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'printMCIcon.inc.php';

$result =  listUsers();

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['userid'] . "</td>";
  echo "<td> <img src='http://signaturecraft.us/avatars/30/face/" . $row['mcusername'] . ".png' height='32' width='32'> </td>";
  /*
  if(md5_file("<img src='http://signaturecraft.us/avatars/30/face/" . $row['mcusername'] . ".png'>") != md5_file("<img src='http://signaturecraft.us/avatars/30/face/nouser.png'>")){
    echo "<td><img src='http://signaturecraft.us/avatars/30/face/" . $row['username'] . ".png' height='32' width='32'></td>";
  }else{
    echo "<td><img src='http://signaturecraft.us/avatars/30/face/noicon.png' height='32' width='32'></td>";
  }
  */
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['mcusername'] . "</td>";
  echo "<td>" . $row['salt'] . "</td>";
  echo "<td> <img src=\"http://hydra-media.cursecdn.com/minecraft.gamepedia.com/6/6a/Emerald.png\" height='16' width='16'> " . $row['emeralds'] . "</td>";
  echo "<td>" . "<button type=\"button\" class=\"btn btn-warning\">Edit</button> <button type=\"button\" class=\"btn btn-danger\">Delete</button> " . "</td>";
  echo "</tr>";
  }
?>
</table>
</div>
</div>
