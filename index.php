<?php include_once "includes/db_connect.php"; include_once "includes/functions.php";
  sec_session_start();
  if(login_check($mysqli) == true){
  ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Daniel Oxenbury (http://daniel.oxituk.co.uk)">
    <meta name="author" content="Michael Krautkramer">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Home</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/index.css" rel="stylesheet">
    <?php
      $userEmail = $_SESSION['email'];
      $userName = $_SESSION['username'];
    ?>
    <?php
      $pageName = "index";
    ?>
</head>
  <?php include_once "./includes/header.inc.php"; ?>
  <body role='document'> <body role='document'>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <div class='page-header'>
        <center>
          <h2>Welcome, <?php echo $userName; ?>!</h2>
	  <?php include_once "./includes/minecrafticon.inc.php"; ?>
	  <br></br>
	  <?php include_once "./includes/serverlist.inc.php"; ?>
          <div id="procinfo" style="width:80%"></div>
	  <div id="meminfo"  style="width:80%"></div>
	</center>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    <span class="sr-only">60% Complete</span>
  </div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    <span class="sr-only">60% Complete</span>
  </div>

      </div>
    </div>
  </div>
</div>
</div>
  </body>
  <?php
    }else{
    ?>
    <script>
      alert("You must be logged in to view this page!");
    </script>
    <?php
      header("Location: http://dominationvps.com/mpcp/login.php");
    }
  ?>
  <?php include_once "./includes/footer.inc.php"; ?>

</html>
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/assets/js/docs.min.js"></script>
    <script src="./webroot/js/Chart.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script type="text/javascript">
    var auto_refresh = setInterval( function () {
    $('#procinfo').load('./includes/processorusage.inc.php');
    }, 10);
    var auto_refresh = setInterval( function () {
    $('#meminfo').load('./includes/memoryusage.inc.php');
    }, 10);
    </script>
