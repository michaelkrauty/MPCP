                  <?php include "includes/mpcp.inc.php";
                    if(count($_POST) > 0 && isset($_POST['start'])) {
                      $memory = 1024;
                      $jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
                      startServer($serverId, $memory, $jar);
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
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <button name="start" type="submit" class='btn btn-lg btn-success' <?php if(screenOnline($serverId)){echo "disabled='disabled'";}?>>Start</button>
                  <button name="stop" type="submit" class='btn btn-lg btn-danger' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Stop</button>
                  <button name="restart" type="submit" class='btn btn-lg btn-warning' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Restart</button>
                  <button name="reload" type="submit" class='btn btn-lg btn-info' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Reload</button>
                  </form>
