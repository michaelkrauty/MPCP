<?php include_once "/var/www/html/mpcp/includes/mpcp.inc.php";
  if(screenOnline($serverId)){
    if(serverOnline($serverId)){
      echo '
      <div class="alert alert-success">
        <center>
          <strong>Server Status: Server is Online!</strong>
        </center>
      </div>';
    }else{
      echo '
      <div class="alert alert-warning">
        <center>
          <strong>Server Status: Server is starting/stopping!</strong>
        </center>
      </div>';
    }
  }else{
    echo '
    <div class="alert alert-danger">
      <center>
        <strong>Server Status: Server is Offline!</strong>
      </center>
    </div>';
  }
?>
