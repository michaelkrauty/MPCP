<!DOCTYPE html>
<html lang='en'>
  <head>
  <?php include_once "includes/db_connect.php"; include_once "includes/functions.php";
    sec_session_start();
    if(login_check($mysqli) == true){
    ?>
    <?php include_once 'mpcp.php'; $serverId = 'mpcp_0'; ?>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content'Michael Krautkramer'>
    <link rel='shortcut icon' href='./bootstrap/assets/ico/favicon.ico'>
    
    <title>MPCP - MultiPlayer Control Panel</title>
    
    <!-- Bootstrap core CSS -->
    <link href='./bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Bootstrap theme -->
    <link href='./bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.5.2/respond.min.js'></script>
    <![endif]-->
    <?php
      $userEmail = $_SESSION['email'];
      $userName = $_SESSION['username'];
    ?>
  </head>
  
  <body role='document'>
    
  <?php include_once "header.inc.php"; ?>
  
  </div>
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

    <div class='jumbotron'>
      <div class='row'>
        <div class='col-md-5' style='float:left;'>
          <center>
            <div class='well'>
              <div class='page-header'>
                <h2>column 1</h2>
              </div>
            </div>
          </center>
        </div>
        <div class='col-md-5' style='float:right;'>
          <center>
            <div class='well'>
              <div class='page-header'>
                <h2>column 2, lol</h2>
              </div>
            </div>
          </center>
        </div>
        <div class="col-md-5" style="float:right;">
          <center>
            <div class="welll">
              <div class="page-header">
                <h2>Column 3</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    
    </div> <!-- /container -->
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/assets/js/docs.min.js"></script>
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
