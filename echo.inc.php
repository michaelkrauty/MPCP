        <?php
        $filepath = "/var/craftsrv/servers/x0008/logs/latest.log";
        $file = file($filepath);
        foreach($file as $line){
        $output = str_replace("[0;30;22m", "§0", $line);
        $output = str_replace("[0;34;22m", "§1", $output);
        $output = str_replace("[0;32;22m", "§2", $output);
        $output = str_replace("[0;36;22m", "§3", $output);
        $output = str_replace("[0;31;22m", "§4", $output);
        $output = str_replace("[0;35;22m", "§5", $output);
        $output = str_replace("[0;33;22m", "§6", $output);
        $output = str_replace("[0;37;22m", "§7", $output);
        $output = str_replace("[0;30;1m", "§8", $output);
        $output = str_replace("[0;34;1m", "§9", $output);
        $output = str_replace("[0;32;1m", "§a", $output);
        $output = str_replace("[0;36;1m", "§b", $output);
        $output = str_replace("[0;31;1m", "§c", $output);
        $output = str_replace("[0;35;1m", "§d", $output);
        $output = str_replace("[0;33;1m", "§e", $output);
        $output = str_replace("[0;37;1m", "§f", $output);
        $output = str_replace("[m", "", $output);
          echo MineToWeb($output)."<br/>";
        }
        ?>
