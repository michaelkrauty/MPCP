	<?php
		include_once 'db_connect.php';
		$error_msg = "";

		if (isset($_POST['userid'])){
			deleteUser($_POST['userid']);
			header("Location: ../index.php");
			die();
		}
	?>
	<div class="well">
        <h2> Delete User </h2>
	<form action="./includes/deleteuser.inc.php" method="post" name="deleteuser_form">
		User ID:
	        <br><input type="text" name = "userid" class="form-control">
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Delete User"/>
	</form>
</div>
