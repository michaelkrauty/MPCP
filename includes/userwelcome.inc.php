<div class ="well">
<?php
	  echo "<h2>Welcome!</h2>";
          $image1 = "http://signaturecraft.us/avatars/30/face/" . $userName . ".png";
          $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
            $md5image1 = md5(file_get_contents($image1));
            $md5image2 = md5(file_get_contents($image2));
            if($md5image1 == $md5image2){
              echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='100' width='100'>";
            }else{
              echo "<img src='http://signaturecraft.us/avatars/30/face/" . $userName . ".png' height='100' width='100'>";
            }
	    echo "<br>";
	    $fortune = shell_exec("fortune");
          ?>
</div>
