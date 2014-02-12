<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><button name="backup" type="submit" class='btn btn-lg btn-normal'>Backup</button>
</form>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once "/var/www/html/mpcp/includes/db_connect.php"; include_once "/var/www/html/mpcp/includes/functions.php";
      sec_session_start();
      if(login_check($mysqli) == true){
      ?>
      <?php
        include_once "/var/www/html/mpcp/includes/mpcp.inc.php";
        $serverId = "mpcp_0";
        $userEmail = $_SESSION['email'];
        $userName = $_SESSION['username'];
        $pageName = "manage";
      ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../bootstrap/assets/ico/favicon.ico">
      <!-- Custom styles for this template -->
      <link href="/var/www/html/mpcp/webroot/css/manage.backup.css" rel="stylesheet">
      <title>MPCP Backup</title>
      <!-- Bootstrap theme -->
      <link href='/var/www/html/mpcp/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet'>
      <!-- Bootstrap core CSS -->
      <link href="/var/www/html/mpcp/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
      <?php include_once "/var/www/html/mpcp/includes/header.inc.php"; ?>
        <div class="container-fluid">
          <div class="row">
          <?php include_once "/var/www/html/mpcp/includes/sidebar.inc.php"; ?>
            <div class="col-sm-9 col-sm-offset-4 col-md-8 col-md-offset-0 main">
              <div class="bar1">
                <div class="well">
                  <div id="buttons">
                  <?php
                    if(count($_POST) > 0 && isset($_POST['backup'])){
                      createBackup($serverId);
                    }
                    if(count($_POST) > 0 && isset($_POST['restore'])){
                      restoreBackup($serverId, "testbackup.zip");
                    }
                  ?>
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <button name="backup" type="submit" class='btn btn-lg btn-success'>Backup</button>
                    <button name="restore" type="submit" class="btn btn-lg btn-warning" >Restore</button>
                  </form>
                  </div>
                </div>
              </div>
              <div class="status-header" id="status"></div>
            </div>
          </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="/var/www/html/mpcp/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/var/www/html/mpcp/bootstrap/assets/js/docs.min.js"></script>
        <script type="text/javascript">
          var auto_refresh = setInterval( function (){
          $('#status').load('/var/www/html/mpcp/includes/status.inc.php');
          }, 1000);
        </script>
      </body>
    <?php
      }else{
        header("Location: http://dominationvps.com/mpcp/login.php");
      }
  ?>
</html>
