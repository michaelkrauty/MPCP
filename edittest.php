<?php

// configuration
$url = 'http://dominationvps.com/mpcp/edittest.php';
$file = '/var/mpcp/servers/mpcp_0/server.properties';

// check if form has been submitted
if (isset($_POST['text'])){
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text" style="width:95%;height:95%;"><?php echo htmlspecialchars($text) ?></textarea>
<input type="submit" />
<input type="reset" />
</form>
