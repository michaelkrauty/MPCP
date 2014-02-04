<?php
include_once 'includes/db_connect.php';
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
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Login</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/login.css" rel="stylesheet">
    <script type="text/JavaScript" src="js/sha512.js"></script> 
  </head>
  <pagetitle><center>Multiplayer Controle Panel | Login</center></pagetitle>
  <body>
    <br>
    <div class="container">
      <form actuib="includes/process_login.php" class="form-signin" role="form" method="post" name="login_form">
      <center><h2 class="form-signin-heading">Sign in:</h2></center>
      <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> <font color="white">Remember me</font>
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button>
      </form>
    </div>
        <p>If you don't have a login, please <a href="register.php">register</a></p>
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
  </body>
</html>

