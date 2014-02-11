	<?php
		include_once 'db_connect.php';
		$error_msg = "";

		if (isset($_POST['planid'])){
			deleteUser($_POST['planid']);
			header("Location: ../index.php");
			die();
		}
	?>
	<div class="well">
        <h2> Delete plan </h2>
	<form action="./includes/deleteplan.inc.php" method="post" name="deleteplan_form">
		Plan ID:
	        <br><input type="text" name = "planid" class="form-control">
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Delete plan"/>
	</form>
</div>
