<?php include "mpcp.inc.php";
  $serverId = "mpcp_0";
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
      <div class="alert alert-danger">
        <center>
          <strong>Server Status: Server is Offline!</strong>
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
