    <!-- Custom styles for this template -->
    <link href="webroot/css/forgotpassword.css" rel="stylesheet">
  </head>
  <div class="strokeme">
  	<pagetitle><center>MPCP Forgot Password</center></pagetitle>
  </div>
  <br>
  <body>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="includes/forgot_password.php" class="form-signin" role="form" method="post" name="forgot_form">
	  	    	<center><logintitle>Forgot Password</logintitle></center>
	      		<br><input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
			<input class="btn btn-lg btn-warning btn-block" type="button" value="Forgot Password" onClick="parent.location='password_lost.php'">
			<br><input class="btn btn-lg btn-primary btn-block" type="button" value="Back to login" onclick="parent.location='login.php'">
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
