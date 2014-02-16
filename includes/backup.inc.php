<?php
  if(isset($_POST['backupname'])){
    $backupName = $_POST['backupname'].".zip";
  }
  if(!isset($_POST['backupname'])){
    $backupName = "testbackup.zip";
  }
  if(count($_POST) > 0 && isset($_POST['backup'])){
    createBackup($serverId);
  }
  if(count($_POST) > 0 && isset($_POST['restore'])){
    stopServer($serverId);
    while(screenOnline($serverId)){
      sleep(0);
    }
    restoreBackup($serverId, "testbackup.zip");
  }
  if(count($_POST) > 0 && isset($_POST['delete']) && isset($_POST['backupname'])){
    deleteBackup($serverId, $_POST['backupname']);
  }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="backupname" type="text"></input><br>
  <button name="backup" type="submit" class='btn btn-lg btn-success'>Backup</button>
  <button name="restore" type="submit" class="btn btn-lg btn-warning" >Restore</button>
  <button name="delete" type="submit" class="btn btn btn-danger">Delete Backup</button>
</form>
