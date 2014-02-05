<?php
 
include_once("rcon.class.php");
 
// Extend the rcon class to tweak it for minecraft.
class minecraftRcon extends rcon {
 
function mcSendCommand($Command) {
$this->_Write(SERVERDATA_EXECCOMMAND,$Command,'');
}
 
function mcRconCommand($Command) {
$this->mcSendcommand($Command);
 
$ret = $this->Read();
 
return $ret[$this->_Id]['S1'];
}
}
 
// Server connection varialbes
$server = "192.187.118.206";
$rconPort = 25575;
$rconPass = "fjdksla;";
 
// Connect to the server
$r = new minecraftRcon($server, $rconPort, $rconPass);
 
// Authenticate, and if so, execute command(s)
if ( $r->Auth() ) {
 
echo "Authenticated\n";
 
// Send a command
var_dump($r->mcRconCommand('say Hello World!'));
}
?>
