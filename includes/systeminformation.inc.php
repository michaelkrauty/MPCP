<div class="well">
<h2> System Information </h2>
<?php

/** Gets the current users IP address **/
function  getuserip(){
return $_SERVER['REMOTE_ADDR'];
}
/** Gets the servers operating system **/
function getos() {
return php_uname('s');
}
/** Gets the servers distrobution**/
function getdistro() {
}
/** Gets the servers architecture**/
function getarc() {
return php_uname('m');
}
/** Gets the servers web server version**/
function getwebsvr() {
return $_SERVER['SERVER_SOFTWARE'];
}
/** Gets the servers WAN address **/
function getwan() {
return $_SERVER['SERVER_NAME'];
}
/** Gets the servers php version **/
function getphp() {
return phpversion();
}
/** Gets the servers java version **/
function getjava() {
// TODO:Doesnt work check permissions & path??
return shell_exec('java -version');
}
/** Gets the current date**/
function getsdate() {
return shell_exec('date +”%A,%B %d %Y”');
}
/** Gets the current time**/
function getstime() {
}
/** Gets the servers uptime **/
function getuptime() {
}

echo "<br>";
echo "Your IP Address: " . getuserip() . "<br>";
echo "Operating System: " . getos() . "<br>";
echo "Distribution: " . getdistro() . "<br>";
echo "Machine Architecture: " . getarc() . "<br>";
echo "Web Server: " . getwebsvr() . "<br>";
echo "WAN Address: " . getwan() . "<br>";
echo "PHP Version: " . getphp() . "<br>";
echo "JAVA Version: " . getjava() . "<br>";
echo "Server Date: " . getsdate() . "<br>";
echo "Server Time: " . getstime() . "<br>";
echo "Server Uptime: " . getuptime() . "<br>";
?>
