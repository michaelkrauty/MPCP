<?php
$data['hostname'] = NULL;
        $data['ip'] = NULL;
        $var = gethostname();
        if ($var === FALSE) {
            $var = NULL;
        }
        else {
            $data['hostname'] = $var;
            $data['ip'] = gethostbyname($var);
        }

 ?>
