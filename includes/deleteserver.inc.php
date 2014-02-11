	<?php
		include_once 'db_connect.php';
		$error_msg = "";

		if (isset($_POST['serverid'])){
			deleteServer($_POST['serverid']);
			header("Location: ../index.php");
			die();
		}
	?>
	<div class="well">
        <h2> Delete Server </h2>
	<form action="./includes/deleteserver.inc.php" method="post" name="deleteserver_form">
		Server ID:
	        <br><input type="text" name = "serverid" class="form-control">
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Delete Server"/>
	</form>
	</div>
