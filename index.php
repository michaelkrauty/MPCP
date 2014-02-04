<!DOCTYPE html>
<html lang='en'>
  <head>
  <?php include_once "includes/db_connect.php"; include_once "includes/functions.php"; sec_session_start(); if(login_check($mysqli) == true){ ?>
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
  </head>
  
  <body role='document'>
  
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class='container'>
        <div class='navbar-header'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <a class='navbar-brand' href='index.php'>DominationVPS</a>
        </div>
        <div class='navbar-collapse'>
          <ul class='nav navbar-nav'>
            <li class='active'><a href='index.php'>Home</a></li>
            <li><a href='manage.php'>Manage</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">User's email here <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="settings/">Settings</a></li>
                <li><a href="">Sub Users</a></li>
                <li><a href="forum/">Support</a></li>
                <li><a href="knowledgebase/">Knowledgebase</a></li>
                <li><a href="forum/">Forum</a></li>
                <li><a href="">Access Log</a></li>
                <li class="divider"></li>
                <li><a href="includes/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <div class='page-header'>
        <center>
          <h1>Welcome!</h1>
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
        <div class="col-md-5" styple="float:right;">
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
  <?php }else{ header("Location: http://dominationvps.com/mpcp/login.php"); } ?>
</html>
