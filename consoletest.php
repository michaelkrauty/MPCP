<?php

// configuration
$url = 'http://dominationvps.com/mpcp/edittest.php';
$file = '/var/mpcp/servers/mpcp_0/logs/latest.log';

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text" style="width:100%;height:92%;"><?php echo htmlspecialchars($text) ?></textarea>
<input type="submit" />
<input type="reset" />
</form>
