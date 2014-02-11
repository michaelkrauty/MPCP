	<?php
		include_once 'db_connect.php';
		$error_msg = "";

		if (isset($_POST['planname'], $_POST['maxslots'], $_POST['storage'], $_POST['memory'])){
			createplan($_POST['planname'], $_POST['maxslots'], $_POST['storage'], $_POST['memory']);
			header("Location: ../index.php");
			die();
		}
	?>
	<div class="well">
        <h2> Create Plan </h2>
	<form action="./includes/createplan.inc.php" method="post" name="createplan_form">
		Plan Name:
	        <br><input type="text" name = "planname" class="form-control" autofocus>
                Max Slots:
                <br><input type="text" name = "maxslots" class="form-control" autofocus>
                Storage (MB):
                <br><input type="text" name = "storage" class="form-control" autofocus>
                Memory (MB):
                <br><input type="text" name = "memory" class="form-control" autofocus>
		<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Create Plan"/>
	</form>
</div>
