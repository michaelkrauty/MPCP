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
    <title>MPCP Login</title>
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
  <?php include_once "header.inc.php"; ?>
  <body role='document'> <body role='document'>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <div class='page-header'>
        <center>
          <h1>Welcome, <?php echo $userName; ?>!</h1>
	  <?php
          $image1 = "http://signaturecraft.us/avatars/30/face/" . $userName . ".png";
          $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
            $md5image1 = md5(file_get_contents($image1));
            $md5image2 = md5(file_get_contents($image2));
            if($md5image1 == $md5image2){
              echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='100' width='100'>";
            }else{
              echo "<img src='http://signaturecraft.us/avatars/30/face/" . $userName . ".png' height='100' width='100'>";
            }
          ?>

        </center>
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
</html>
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/assets/js/docs.min.js"></script>

