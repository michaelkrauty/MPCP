<?php

$jar = "craftbukkit-1.7.2-R0.3-20131225.043511-4.jar";
if("craftbukkit-" == substr($jar, 0, 12)){
  if("1.7.2" == substr($jar, 12, 5)){
    echo "1.7.2";
  }
  if("1.6.4" == substr($jar, 12, 5)){
    echo "1.6.4";
  }
}else{
  echo "nope";
}


?>
