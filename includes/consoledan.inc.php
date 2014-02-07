<div class="well">
<h2> Console </h2>
<?php
$serverId = "mpcp_0";
$logFile = "/var/mpcp/servers/" . $serverId . "/logs/latest.log";
?>
            <div class="wellconsole">
              <div id="consoleviewer"></div>
            </div>
          </div>
          <div class="commandbar">
            <form>
              <div class="col-xs-10">
                <input name="cmd" type="text" class="form-control" method="get" placeholder="Enter a command here...">
              </div>
            <div class="col-xs-2">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Run</button>
              </div>
          </div>
    <script type="text/javascript">
    var auto_refresh = setInterval( function () {
    $('#consoleviewer').load('consoleviewer.inc.php');
    }, 1000);
    var auto_refresh = setInterval( function () {
    $('#status').load('../includes/status.inc.php');
    }, 1000);
    </script>




















?>
