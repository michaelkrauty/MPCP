                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <button name="start" type="submit" class='btn btn-lg btn-success' <?php if(screenOnline($serverId)){echo "disabled='disabled'";}?>>Start</button>
                  <button name="stop" type="submit" class='btn btn-lg btn-danger' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Stop</button>
                  <button name="restart" type="submit" class='btn btn-lg btn-warning' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Restart</button>
                  <button name="reload" type="submit" class='btn btn-lg btn-info' <?php if(!screenOnline($serverId)){echo "disabled='disabled'";}?>>Reload</button>
                  </form>
