<?php
	include_once 'includes/register.inc.php';
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
			<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
	  	    	<center><logintitle>Register</logintitle></center>
			<br><input type="text" name = "username" class="form-control" placeholder="Username" required autofocus>
			<br><input type="email" name= "email" class="form-control" placeholder="Email address" required>
	      		<br><input type="password" name="password" class="form-control" placeholder="Password" required>
			<br><input type="password" name="confirmpwd" class="form-control" placeholder="Confirmation Password" required>
	      		<br><input class="btn btn-lg btn-success btn-block" type="button" value="Register" onClick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);" />
			<br><input class="btn btn-lg btn-primary btn-block" type="button" value="Back to login" onclick="parent.location='login.php'">
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
