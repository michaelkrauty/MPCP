<?php

echo shell_exec("screen -x mpcp_0 -p 0 -X stuff \"`printf \"list\r\"`\";");


?>
