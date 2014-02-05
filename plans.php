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
          <div class="well" style="
            border-right-width: 1px;
            padding-right: 19px;
            margin-right: 560px;
            margin-left: 560px;
            margin-top: 30px;
          ">
            <pagetitle>Minecraft Plans</pagetitles>
          </div>
        </div>
      </div>
    </center>
    <center>
      <div class="table">
        <table style="width:100%;" class="table table-curved table-hover">
        <tr>
          <center>
            <th width="15%">Plan</th>
            <th width="15%">RAM</th>
            <th width="15%">Players</th>
            <th width="15%">Price</th>
            <th width="15%">Select</th>
            <tr>
              <td><h2>Air</h2></td>
              <td><h2>256MB</h2></td>
              <td><h2>3</h2></td>
              <td><h2>$2</h2></td>
              <td><ul class="pager"><li><a href="http://dominationvps.com/hosting/cart.php?a=add&pid=6">Order Now</a></li></ul></td>
            </tr>
            <tr>
              <td><h2>Grass</h2></td>
              <td><h2>512MB</h2></td>
              <td><h2>5</h2></td>
              <td><h2>$4</h2></td>
              <td><ul class="pager"><li><a href="http://dominationvps.com/hosting/cart.php?a=add&pid=7">Order Now</a></li></ul></td>
            </tr>
            <tr>
              <td><h2>Cobble</h2></td>
              <td><h2>768MB</h2></td>
              <td><h2>10</h2></td>
              <td><h2>$6</h2></td>
              <td><ul class="pager"><li><a href="http://dominationvps.com/hosting/cart.php?a=add&pid=13">Order Now</a></li></ul></td>
            </tr>
            <tr>
              <td><h2>Stone</h2></td>
              <td><h2>1GB</h2></td>
              <td><h2>20</h2></td>
              <td><h2>$8</h2></td>
              <td><ul class="pager"><li><a href="http://dominationvps.com/hosting/cart.php?a=add&pid=8">Order Now</a></li></ul></td>
            </tr>
          </tr>
        </center>
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
