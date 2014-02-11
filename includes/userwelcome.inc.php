<div class ="well">
<?php
	
	  echo "<h2>Welcome!</h2>";
	  include_once 'printMCIcon.inc.php';
	  MCIconLarge($userName);
	  echo "<br></br>";
          echo shell_exec("fortune");
          ?>
</div>
