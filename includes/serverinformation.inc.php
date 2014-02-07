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

echo "<table align=\"center\"valign=\"center\"class=\"table table-striped table-bordered table-condensed\">";
echo "<tr>";
echo "<td>Server Operating System:</td>";
echo "<td>" . getos() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Server Distribution:</td>";
echo "<td>" . getdistro() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Server Architecture:</td>";
echo "<td>" . getarc() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Web Server:</td>";
echo "<td>" . getwebsvr() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>WAN Address:</td>";
echo "<td>" . getwan() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>PHP Version:</td>";
echo "<td>" . getphp() .  "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>JAVA Version:</td>";
echo "<td>" . getjava() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Server Date:</td>";
echo "<td>" . getsdate() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Server Time:</td>";
echo "<td>" . getstime() . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Server Uptime:</td>";
echo "<td>" . getuptime() . "</td>";
echo "</tr>";
echo "</table>";

?> 
