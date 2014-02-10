<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once "includes/db_connect.php"; include_once "includes/functions.php";
      sec_session_start();
      if(login_check($mysqli) == true){
      ?>
      <?php
        include "includes/mpcp.inc.php";
        $serverId = "mpcp_0";
        $logFile = "/var/mpcp/servers/" . $serverId . "/logs/latest.log";
        $userEmail = $_SESSION['email'];
        $userName = $_SESSION['username'];
        $pageName = "manage";
      ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.ico">
      <!-- Custom styles for this template -->
      <link href="webroot/css/manage.css" rel="stylesheet">
      <title>MPCP Dashboard</title>
      <!-- Bootstrap theme -->
      <link href='bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet'>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy this line! -->
      <!--[if lt IE 9]><script src="./bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <?php include_once "includes/header.inc.php"; ?>
        <div class="container-fluid">
          <div class="row">
          <?php include_once "includes/sidebar.inc.php"; ?>
            <div class="col-sm-9 col-sm-offset-4 col-md-8 col-md-offset-0 main">
              <div class="bar1">
                <div class="well">
                  <?php include_once "includes/managebuttons.inc.php"; ?>
                  <h2>Server Address: <strong>VPS's IP address goes here</strong></h2>
                  <div class='progress-bar' role='progressbar' aria-valuenow='19' aria-valuemin='0' aria-valuemax='20' style='width: 90%;'><span class='sr-only'></span></div>
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <button name="start" type="submit" class='btn btn-lg btn-success' <?php if(screenOnline($serverId)){echo "disabled='disabled'";}?>>Start</button>
                  <button name="stop" type="submit" class='btn btn-lg btn-danger' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Stop</button>
                  <button name="restart" type="submit" class='btn btn-lg btn-warning' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Restart</button>
                  <button name="reload" type="submit" class='btn btn-lg btn-info' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Reload</button>
                  </form>
                </div>
              </div>
              <div class="status-header" id="status"></div>
            </div>
          </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bootstrap/assets/js/docs.min.js"></script>
        <script type="text/javascript">
          var auto_refresh = setInterval( function () {
          $('#status').load('includes/status.inc.php');
          }, 1000);
        </script>
      </body>
    <?php
      }else{
        header("Location: http://dominationvps.com/mpcp/login.php");
      }
  ?>
</html>
