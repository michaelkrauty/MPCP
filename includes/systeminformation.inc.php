<div class="well">
<h2> Server Information </h2>
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
$distros = array(
                "Arch" => "arch-release",
                "Debian" => "debian_version",
                "Fedora" => "fedora-release",
                "Ubuntu" => "lsb-release",
                'Redhat' => 'redhat-release',
                'CentOS' => 'centos-release');
    //Get everything from /etc directory.
    $etcList = scandir('/etc');

    //Loop through /etc results...
    $OSDistro;
    foreach ($etcList as $entry)
    {
        //Loop through list of distros..
        foreach ($distros as $distroReleaseFile)
        {
            //Match was found.
            if ($distroReleaseFile === $entry)
            {
                //Find distros array key(i.e. Distro name) by value(i.e. distro release file)
                $OSDistro = array_search($distroReleaseFile, $distros);

                break 2;//Break inner and outer loop.
            }
        }
    }
    return $OSDistro;
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
return @date('l jS \of F Y');
}
/** Gets the current time**/
function getstime() {
return @date('h:i:s A');
}
/** Gets the servers uptime **/
function getuptime() {
$uptime = shell_exec("cut -d. -f1 /proc/uptime");
$days = floor($uptime/60/60/24);
$hours = $uptime/60/60%24;
$mins = $uptime/60%60;
$secs = $uptime%60;
return "$days Days, $hours Hours, $mins Minutes, and $secs Seconds";
}

echo "<br>";
/** echo "Your IP Address: " . getuserip() . "<br>";**/
echo "Server Operating System: " . getos() . "<br>";
echo "Server Distribution: " . getdistro() . "<br>";
echo "Server Architecture: " . getarc() . "<br>";
echo "Web Server: " . getwebsvr() . "<br>";
echo "WAN Address: " . getwan() . "<br>";
echo "PHP Version: " . getphp() . "<br>";
echo "JAVA Version: NA" . getjava() . "<br>";
echo "Server Date: " . getsdate() . "<br>";
echo "Server Time: " . getstime() . "<br>";
echo "Server Uptime: " . getuptime() . "<br>";
?>
