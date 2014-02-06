<?php
  $serverId = "mpcp_0";
  $i = 1;
  while ($i <= 100) {
    if(shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n '$i p'") != ""){
      echo shell_exec("tail -n 100 /var/mpcp/servers/" . $serverId . "/logs/latest.log | sed -n '$i p'");
      echo "<br>";
    }
    $i++;
  }
?>
<script>
  textbox.scroll = textbox.maxScroll;
</script>
