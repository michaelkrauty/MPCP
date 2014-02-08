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
	  <div id="userwelcome"><?php include_once "./includes/userwelcome.inc.php";?></div>
          <div id="serverinformation"></div>
	  <div id="serverlist"><?php include_once "./includes/serverlist.inc.php";?></div>
	  <div id="userlist"><?php include_once "./includes/userlist.inc.php";?></div>
	  <div id="procinfo"></div>
	  <div id="meminfo"></div>
	  <div id="fileexplorer"><?php include_once "./includes/fileexplorer.inc.php";?></div>
	  <div id="console"></div>
	</center>
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
    }, 1000);

    var auto_refresh = setInterval( function () {
    $('#meminfo').load('./includes/memoryusage.inc.php');
    }, 1000);

    var auto_refresh = setInterval( function () {
    $('#console').load('./includes/consoledan.inc.php');
    }, 1000);

    var auto_refresh = setInterval( function () {
    $('#serverinformation').load('./includes/serverinformation.inc.php');
    }, 1000);


    </script>
    <script language="javascript"> 
    function DoPost($fullpath){
    $.post("index.php", {$fullpath;} );  //Your values here..
    }
    </script>
