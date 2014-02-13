<?php $text = file_get_contents("/var/mpcp/servers/mpcp_0/logs/latest.log"); ?>
<textarea name="text" style="width:100%;height:100%;"><?php echo htmlspecialchars($text) ?></textarea>
