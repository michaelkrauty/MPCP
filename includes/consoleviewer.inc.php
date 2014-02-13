<?php $text = file_get_contents("/var/mpcp/servers/mpcp_0/logs/latest.log"); ?>
<textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
