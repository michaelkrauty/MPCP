<div class="wellconsole">
                <?php
                  include_once "consoleviewer.inc.php";
                ?>
              </div>
              <form>
              <div class="commandbar">
                <div class="col-xs-10">
                  <input name="cmd" type="text" class="form-control" method="post" placeholder="Enter a command here...">
                </div>
                <div class="col-xs-2">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Run</button>
                </div>
              </div>
              <?php
                if(screenOnline($serverId)){
                  if(isset($_GET['cmd'])){
                    $cmd = $_GET['cmd'];
                    if($cmd != null){
                      executeCommand($serverId, $cmd);
                    }
                  }
                }else{
                  echo "Server is offline!";
                }
                ?>
              </form>
