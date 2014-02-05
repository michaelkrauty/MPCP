<?

function sys_getloadavg_hack()
{
    $str = substr(strrchr(shell_exec("uptime"),":"),1);
    $avs = array_map("trim",explode(",",$str));

    return $avs;
}

print_r(sys_getloadavg_hack());

// Array
// (
//     [0] => 6.24
//     [1] => 4.92
//     [2] => 3.99
// )

?>
