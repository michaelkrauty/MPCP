<?php include_once "mpcp.inc.php";
  date_default_timezone_set("America/Los_Angeles");
  if(count($_POST) > 0 && isset($_POST['backup'])) {
    $serverId = "mpcp_0";
    backupServer($serverId);
  }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><button name="backup" type="submit" class='btn btn-lg btn-normal'>Backup</button>
</form>
