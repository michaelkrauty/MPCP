	<?php
		include_once 'db_connect.php';
		$error_msg = "";

		if (isset($_POST['name'], $_POST['owner'], $_POST['jar'], $_POST['ip'], $_POST['port'], $_POST['plan'])){
			createServer($_POST['name'], $_POST['owner'], $_POST['jar'], $_POST['ip'], $_POST['port'], $_POST['plan']);
			header("Location: ../index.php");
			die();
		}
	?>
	<div class="well">
        <h2> Create Server </h2>
	<form action="./includes/createserver.inc.php" method="post" name="createserver_form">
		Server Name:
	        <br><input type="text" name = "name" class="form-control" autofocus>
                Server Owner:
                <br><input type="text" name = "owner" class="form-control" autofocus>
                Server Jar:
                <br><input type="text" name = "jar" class="form-control" autofocus>
                Server IP:
                <br><input type="text" name = "ip" class="form-control" autofocus>
                Server Port:
                <br><input type="text" name = "port" class="form-control" autofocus>
                Server Plan:
                <br><input type="text" name = "plan" class="form-control" autofocus>
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Create Server"/>
	</form>
</div>
