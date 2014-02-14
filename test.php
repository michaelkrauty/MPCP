<?php
	function getJarVersion($jar){
		if("craftbukkit-" == substr($jar, 0, 12)){
			return substr($jar, 12, 5);
		}
		if("spigot-" == substr($jar, 0, 7)){
			return substr($jar, 7, 5);
		}
		if("minecraft_server." == substr($jar, 0, 17)){
			return substr($jar, 17, 5);
		}
		else{
			return "ERROR in \"getJarVersion(\$jar)\" (jar not found!)";
		}
	}
	
	echo getJarVersion("craftbukkit-1.6.4-R2.0.jar");
	echo "<br>";
	echo getJarVersion("minecraft_server.1.7.4.jar");
	echo "<br>";
	echo getJarVersion("spigot-1.7.2-R0.3-SNAPSHOT.jar");
	echo "<br>";
	echo getJarVersion("minecraftasdfjadsfd.1.7.2.jar");
	echo "<br>";
	echo getJarVersion("minecraft_server.145344.jar");


?>
