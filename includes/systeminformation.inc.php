<div class="well">
<h2> System Information </h2>
<?php
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
}
/** Gets the servers WAN address **/
function getwan() {
}
/** Gets the servers php version **/
function getphp() {
}
/** Gets the servers java version **/
function getjava() {
}
/** Gets the current date**/
function getsdate() {
}
/** Gets the current time**/
function getstime() {
}
/** Gets the servers uptime **/
function getuptime() {
}


echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Operating System:" . getos() . "<br>";
echo "Distribution:" . getdistro() . "<br>";
echo "Machine Architecture:" . getarc() . "<br>";
echo "Web Server:" . getwebsvr() . "<br>";
echo "WAN Address:" . getwan() . "<br>";
echo "PHP Version:" . getphp() . "<br>";
echo "JAVA Version:" . getjava() . "<br>";
echo "System Date:" . getsdate() . "<br>";
echo "System Time:" . getstime() . "<br>";
echo "System Uptime:" . getuptime() . "<br>";
?>
