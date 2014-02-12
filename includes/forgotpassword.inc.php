<?php

include_once 'generatepassword.inc.php';
include_once 'db_connect.php';
if (isset($_POST['useremail']))
  {
    $email = $_POST['useremail'];
    $password = randomPassword();
    modifyUser($password, $email);
    mail($email, "Your new Password" , $password , "From: MRBILLGATES@dominationvps.com\n");
  }




?>

<div class="well">
<h2> Forgot Password </h2>

<form action="./includes/forgotpassword.inc.php" method="post" name="forgotpassword_form">
Account Email Address:
<br><input type="text" name = "useremail" class="form-control" placeholder="Account Email">
<br><input class="btn btn-lg btn-warning btn-block" type="submit" value="Send Password"/>

<?php echo randomPassword(); ?>
