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
    <title>MPCP Minecraft Plans</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/plans.css" rel="stylesheet">
    <?php
      $userEmail = $_SESSION['email'];
      $userName = $_SESSION['username'];
    ?>
    <?php
      $pageName = "plans";
    ?>
</head>
  <?php include_once "./includes/header.inc.php"; ?>
  <body role='document'> <body role='document'>
    
    
    <center>
      <div class="header">
        <div class="strokeme">
          <div class="page-header">
            <pagetitle>Minecraft Plans</pagetitles>
          </div>
        </div>
      </div>
    </center>
    <center>
    <div class="table">
    <table class="table table-striped table-bordered table-condensed">
        <tr>
        <th width="25%">Plan</th>
        <th width="25%">RAM</th>
        <th width="25%">Recommended Players</th>
        <th width="25%">Description</th>
        <tr class="success">
                <td>Air</td>
                <td>256MB</td>
                <td>3</td>
                <td>lol, this plan is light as air</td>
        </tr>
        <tr class="success">
                <td>Grass</td>
                <td>512MB</td>
                <td>5</td>
                <td>so this plan is 512MB. yay.</td>
        </tr>
        <tr class="success">
                <td>Cobble</td>
                <td>768</td>
                <td>10</td>
                <td>For those people who think 512MB is whimpy, but 1GB is overkill</td>
        <tr class="success">
                <td>Stone</td>
                <td>1GB</td>
                <td>20</td>
                <td>Overkill? naaaaah.</td>
</table>
</div>
</center>
    
    
    
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
