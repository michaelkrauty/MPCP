<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class='container'>
    <div class='navbar-header'>
      <span class='sr-only'>Toggle navigation</span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <a class='navbar-brand' href='./'; style="font-size:32px"; "vertical-align:middle";> MPCP </a>
    </div>
    <div class='navbar-collapse'>
      <ul class='nav navbar-nav'>
	<?php if($pageName == "index"){echo "<li class='active'>";}else{echo "<li>";}?><a href='__DIR__/mpcp'><span class="glyphicon glyphicon-home" style="font-size:28px;"></span></a></li>
        <?php if($pageName == "manage"){echo "<li class='active'>";}else{echo "<li>";}?><a href='__DIR__/mpcp/manage'><span class="glyphicon glyphicon-cog" style="font-size:28px;"></span><br></a></li>
        <?php if($pageName == "plans"){echo "<li class='active'>";}else{echo "<li>";}?><a href='__DIR__/mpcp/plans.php'><span class="glyphicon glyphicon-tag" style="font-size:28px;"></span><br></a></li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown"></span> <?php include_once "__DIR__/mpcp/includes/minecrafticonsmall.inc.php" ?><?php echo " " . $userName; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="http://dominationvps.com/mpcp/settings/"><span class="glyphicon glyphicon-dashboard"></span> Settings</a></li>
            <li><a href=""><span class="glyphicon glyphicon-plus-sign"></span> Sub Users</a></li>
            <li><a href="http://dominationvps.com/mpcp/forum/"><span class="glyphicon glyphicon-question-sign"></span> Support</a></li>
            <li><a href="http://dominationvps.com/mpcp/knowledgebase/"><span class="glyphicon glyphicon-info-sign"></span> Knowledgebase</a></li>
            <li><a href="http://dominationvps.com/mpcp/forum/"><span class="glyphicon glyphicon-comment"></span> Forum</a></li>
            <li><a href=""><span class="glyphicon glyphicon-exclamation-sign"></span> Access Log</a></li>
            <li class="divider"></li>
            <li><a href="http://dominationvps.com/mpcp/includes/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
