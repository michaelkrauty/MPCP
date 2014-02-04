<?php include_once 'includes/db_connect.php';	include_once 'includes/functions.php';

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
    <meta name="description" content="">
    <meta name="author" content="Daniel Oxenbury (http://daniel.oxituk.co.uk)">
    <meta name="author" content="Michael Krautkramer">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Login</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/login.css" rel="stylesheet">
  </head>
  <div class="strokeme">
  	<pagetitle><center>Log into MPCP</center></pagetitle>
  </div>
  <br>
  <body>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="includes/process_login.php" class="form-signin" role="form" method="post" name="login_form">
	  	    	<center><logintitle>Sign In</logintitle></center>
		      	<?php
	  	    	  if (isset($_GET['error'])) {
	        	  	echo '<p class="error">Error Logging In!</p>';
	        		}
	      		?>
	      		<br><input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
	      		<br><input type="password" name="password" class="form-control" placeholder="Password" required>
	      		<label class="checkbox">
	      		<input type="checkbox" value="remember-me">Remember me</label>
	      		<input class="btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);">
			<table width="100%">
			<tr>
			<th width="50%">
  			<input class="btn btn-lg btn-success btn-block" type="button" value="Register" onClick="parent.location='register.php'">
     			<th width="50%">
			<input class="btn btn-lg btn-warning btn-block" type="button" value="Forgot Password" onClick="parent.location='password_lost.php'">
			</tr>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
