<?php
  $url = 'http://dominationvps.com/mpcp/includes/edittest.inc.php';
  $file = '/var/mpcp/servers/'.$serverId.'/logs/latest.log';
  if (isset($_POST['text'])){
    file_put_contents($file, $_POST['text']);
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
  }
  $text = file_get_contents($file);
?>
<form action="" method="post">
  <textarea name="text" style="width:100%;height:92%;"><?php echo htmlspecialchars($text) ?></textarea>
  <input type="submit"/>
  <input type="reset"/>
</form>
