<div class="well">
	<h2> Create User </h2>
	
	<?php
		include_once 'db_connect.php';
		
		$error_msg = "";
		$salt = "bFUt4WUp";
		
		// $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		// $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		// $email = filter_var($email, FILTER_VALIDATE_EMAIL);
		// $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
		// $password = hash('sha512', $password . $random_salt);
		
		if (isset($_POST['email'], $_POST['password'], $_POST['mcusername'])){
			createUser($_POST['email'], $_POST['password'], $_POST['mcusername'], $salt);
		}
	?>
	
	<form action="./includes/createuser.inc.php" method="post" name="createuser_form">
		Minecraft Username:
	        <br><input type="text" name = "mcusername" class="form-control" placeholder="Minecraft Username" autofocus>
	        Email:
	        <br><input type="email" name= "email" class="form-control" placeholder="Email address" required>
	        Password:
	        <br><input type="password" name="password" class="form-control" placeholder="Password" required>
	        Password Confirmation:
		<br><input type="password" name="confirmpwd" class="form-control" placeholder="Confirmation Password" required>
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Create User"/>
	</form>
</div>
