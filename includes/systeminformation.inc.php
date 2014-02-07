<div class="well">
<h2> System Information </h2>
<?php
/** Gets the servers operating system **/
function getos() {
return php_uname('s')
}
/** Gets the servers distrobution**/
function getdistro() {
}
/** Gets the servers architecture**/
function getarc() {
return php_uname('m')
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
echo getos() . "<br>";
echo getdistro() . "<br>";
echo getarc() . "<br>";
echo getwebsvr() . "<br>";
echo getwan() . "<br>";
echo getphp() . "<br>";
echo getjava() . "<br>";
echo getsdate() . "<br>";
echo getstime() . "<br>";
echo getuptime() . "<br>";
?>
