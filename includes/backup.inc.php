                  <?php
                    if(count($_POST) > 0 && isset($_POST['backup'])) {
                      backupServer($serverId);
                    }
                  ?>
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><button name="backup" type="submit" class='btn btn-lg btn-normal'>Backup</button>
                  </form>
