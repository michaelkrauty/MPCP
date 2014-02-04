<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./bootstrap/assets/ico/favicon.ico">

    <title>MPCP Dashboard</title>
    
    <!-- Bootstrap theme -->
    <link href='./bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet'>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <!-- for now, the only server around town is "testserver" -->
  <?php include "mpcp.php"; $serverId = "testserver"; ?>

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
            <li><a href='index.php'>Home</a></li>
            <li class='active'>
              <a href='manage.php'>
                Manage
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle"dropdown">User's email here <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Logout</a>
              </ul>
            </li>
          </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <br><br><br>
          <div class='well'>
            <ul class="nav nav-sidebar">
              <li><a href="">Dashboard</a></li>
              <li><a href="">Manage</a></li>
              <li><a href="">Server Jar Mod</a></li>
              <li><a href="">Server Configuration</a></li>
              <li><a href="">Server Files</a></li>
              <li><a href="">Scheduled Tasks</a></li>
              <li><a href="">Backup</a></li>
              <li><a href="">Plugins</a></li>
              <li><a href="">Support</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-4 col-md-8 col-md-offset-0 main">
          <br>
          <br>
          <h1 class="page-header">Dashboard</h1>
          <div class="well">
            <?php
              if(count($_POST) > 0 && isset($_POST['start'])) {
                startServer($serverId);
              }
              if(count($_POST) > 0 && isset($_POST['stop'])) {
                stopServer($serverId);
              }
              if(count($_POST) > 0 && isset($_POST['restart'])) {
                restartServer($serverId);
              }
              if(count($_POST) > 0 && isset($_POST['reload'])) {
                reloadServer($serverId);
              }
            ?>
            <h2>Server Address: <strong>VPS's IP address goes here</strong></h2>
            <div class='progress-bar' role='progressbar' aria-valuenow='19' aria-valuemin='0' aria-valuemax='20' style='width: 90%;'><span class='sr-only'></span></div>
             <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <button name="start" type="submit" class='btn btn-lg btn-success' <?php if(screenOnline($serverId)){echo "disabled='disabled'";}?>>Start</button>
               <button name="stop" type="submit" class='btn btn-lg btn-danger' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Stop</button>
               <button name="restart" type="submit" class='btn btn-lg btn-warning' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Restart</button>
               <button name="reload" type="submit" class='btn btn-lg btn-info' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Reload</button>
             </form>
          </div>
          <?php
            if(screenOnline($serverId)){
              echo '
              <div class="alert alert-success">
                <center>
                  <strong>Server Status: Server is Online!</strong>
                </center>
              </div>';
            }else{
              echo '
              <div class="alert alert-danger">
                <center>
                  <strong>Server Status: Server is Offline!</strong>
                </center>
              </div>';
            }
          ?>
        <div class="well">
          <div class="well">
            <p>The console goes here.</p>
            <p>This is box is where all server output will be printed</p>
            <p>The Console Viewer will be a very responsive and nice-looking way to access the console of this minecraft server.</p>
            <p>This box will expand as necessary to fit more content.</p>
            <p>Unlike most other control panel consoles, this one outputs on the bottom, rather than the top. This is a good thing, because that's the way Minecraft's console prints anyway :)</p>
            <p></p>
          </div>
          <form>
            <div class="col-xs-10">
              <input name="command" type="text" class="form-control" method="post" placeholder="Enter a command here..." autofocus>
            </div>
            <div class="col-xs-2">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Run</button>
            </div>
            <br><br>
           <?php
              if(screenOnline($serverId)){
                echo implode(" ",$_POST['command']);
                echo test($serverId, $cmd);
              }else{
                echo "Server is not online!";
              }
            ?>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/assets/js/docs.min.js"></script>
  </body>
</html>
