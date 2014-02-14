<?php
$jar = "spigot-1.7.2-R0.3-SNAPSHOT.jar";
#$jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
if("craftbukkit-" == substr($jar, 0, 12)){
  echo substr($jar, 12, 5);
}
if("spigot-" == substr($jar, 0, 7)){
  echo substr($jar, 7, 5);
}


?>
