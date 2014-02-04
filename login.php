<?php include_once 'includes/db_connect.php';	include_once 'includes/functions.php'; sec_session_start();	if (login_check($mysqli) == true) {	$logged = 'in';	} else { $logged = 'out';	} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Login</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/login.css" rel="stylesheet">
  </head>
  <pagetitle><center>Log into MPCP</center></pagetitle>
  <body>
    <center>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="includes/process_login.php" class="form-signin" role="form" method="post" name="login_form">
	  	    	<h2 class="form-signin-heading">Sign in:</h2>
		      	<?php
	  	    	  if (isset($_GET['error'])) {
	        	  	echo '<p class="error">Error Logging In!</p>';
	        		}
	      		?>
	      		<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
	      		<input type="password" name="password" class="form-control" placeholder="Password" required>
	      		<label class="checkbox">
	      		<input type="checkbox" value="remember-me">Remember me</label>
	      		<input class= "btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
					</form>
			    <p>If you don't have a login, please <a href="register.php">register</a></p>
	  		  <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
	    		<p>You are currently logged <?php echo $logged ?>.</p>
				</div>
			</div>
		</center>
	</body>
</html>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
