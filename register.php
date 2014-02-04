<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	if (login_check($mysqli) == true) {
		$logged = 'in';
	} else {
		$logged = 'out';
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MPCP Registration Page">
    <meta name="author" content="Daniel Oxenbury (http://Daniel.oxituk.co.uk)">
    <meta name="author" content="Michael Krautkramer">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Registration</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/registration.css" rel="stylesheet">
  </head>
  <div class="strokeme">
  	<pagetitle><center>MPCP User Registration</center></pagetitle>
  </div>
  <br>
  <body>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="includes/process_registration.php" class="form-signin" role="form" method="post" name="login_form">
	  	    	<center><logintitle>Register.</logintitle></center>
			<input type="text" name = "username" class="form-control" placeholder="Username" required autofocus>
			<input type="email" name= "email" class="form-control" placeholder="Email address" required>
	      		<input type="password" name="password" class="form-control" placeholder="Password" required>
			<input type="passwordconf" name="passwordcomf" class="form-control" placeholder="Confirmation Password" required>
	      		<input class="btn btn-lg btn-success btn-block" type="button" value="Register" onClick="">
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
