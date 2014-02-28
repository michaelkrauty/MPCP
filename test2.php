<!DOCTYPE html>
<html>
<head>
<title>Minecraft Log</title>
<style>
    #log{
        height:400px;
        overflow-y: scroll;
        margin: 5px 0 0 1px;
        border: 1px solid;
    }
    .green{color: green;}
    .red{color: red;}
    .purple{color: purple;}
    .black{color: black;}
    .blue{color: darkblue;}
    .gold{color: gold;}
    .cyan{color: darkcyan;}
    .aqua{color: cadetblue;}
    .gray{color: #888;}
    .bold{ font-weight:bold;}
</style>
<script>
    function scroll(){
    //scroll div to bottom
    var objDiv = document.getElementById("log");
    objDiv.scrollTop = objDiv.scrollHeight;
    }
</script>
</head>
<?php
$pass = htmlspecialchars($_POST["date"]);
if (!$pass){
    echo "<body onLoad='scroll()'>";
}
else {
    echo "<body>";
}

$serverId = "mpcp_0";

$filepath = "/var/mpcp/servers/mpcp_0/logs/latest.log";
$file = file($filepath);
$last = "";


/* Output Log For Required Date */
echo "<div id='log'>";
foreach($file as $line) {
    /* Remap Problem Characters */
    $line = preg_replace("/</","&lt;",$line);
    $line = preg_replace("/>/","</span>&gt;",$line);
    $date = substr($line, 0, 10);
    /* Remove Unrequired Formatting Codes */
    $line = str_replace("[m","",$line);
    $line = str_replace("[21m","",$line);
    $line = str_replace("[3m","",$line);
    /* Split Log Line Into Sections to Using First Formatting Code Style */
    $segarray = preg_split( '/(\[0|\[m)/', $line );
    for ($i = 1; $i < count($segarray); ++$i){
        /* Do Replace to Add Styled Spans */
        if (preg_match('/;\d{2};\d+m/', $segarray[$i])) {
            $segarray[$i] = preg_replace("/;30/","<span class='black",$segarray[$i]);
            $segarray[$i] = preg_replace("/;31/","<span class='red",$segarray[$i]);
            $segarray[$i] = preg_replace("/;32/","<span class='green",$segarray[$i]);
            $segarray[$i] = preg_replace("/;33/","<span class='gold",$segarray[$i]);
            $segarray[$i] = preg_replace("/;34/","<span class='blue",$segarray[$i]);
        $segarray[$i] = preg_replace("/;35/","<span class='purple",$segarray[$i]);
            $segarray[$i] = preg_replace("/;36/","<span class='aqua",$segarray[$i]);
            $segarray[$i] = preg_replace("/;37/","<span class='gray",$segarray[$i]);
            $segarray[$i] = preg_replace("/;22m/","'>",$segarray[$i]);
            $segarray[$i] = preg_replace("/;1m/"," bold'>",$segarray[$i]);
            $segarray[$i] = $segarray[$i]."</span>";
        }
    }
    /* Rejoin Then Split Log Line Using Second Formatting Code Style */
    $line = join("",$segarray);
    $segarray = preg_split( '/§/', $line );
    for ($i = 1; $i < count($segarray); ++$i){
        /* Do Replace to Add Styled Spans */
        $segarray[$i] = preg_replace("/^0/","<span class='black'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^1/","<span class='blue'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^2/","<span class='green'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^3/","<span class='aqua'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^4/","<span class='red'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^5/","<span class='purple'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^6/","<span class='gold'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^7/","<span class='gray'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^8/","<span class='gray'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^9/","<span class='blue'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^a/","<span class='green'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^b/","<span class='aqua'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^c/","<span class='red'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^d/","<span class='purple'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^e/","<span class='gold'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^f/","<span class='black'>",$segarray[$i]);
        $segarray[$i] = preg_replace("/^r/","<span class='black'>",$segarray[$i]);
        $segarray[$i] = $segarray[$i]."</span>";
    }
    /* Rejoin and Output to Webpage */
    $line = join("",$segarray);
    echo $line."<br/>\n";
}

echo "</div>";
?>
</body>
</html>
