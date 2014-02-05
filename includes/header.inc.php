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
        <?php if($pageName == "index"){echo "<li class='active'>";}else{echo "<li>";}?><a href='../index.php'>Home</a></li>
        <?php if($pageName == "manage"){echo "<li class='active'>";}else{echo "<li>";}?><a href='../manage/index.php'>Manage</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $userEmail; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../settings/">Settings</a></li>
            <li><a href="">Sub Users</a></li>
            <li><a href="../forum/">Support</a></li>
            <li><a href="../knowledgebase/">Knowledgebase</a></li>
            <li><a href="../forum/">Forum</a></li>
            <li><a href="">Access Log</a></li>
            <li class="divider"></li>
            <li><a href="../includes/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
