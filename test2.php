<div style="width:100%;margin:3px 0;">
  <div style="height:95%;border:1px solid #C9C9C9;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;color:#939391;background:#272922;padding:4px 2px 4px 4px;">
    <div style="overflow-y:scroll;overflow-x:auto;height:100%;">
      <span id="consoleviewerwindow" style="font-family:'Consolas','Lucidia Console','Courier New',Monospace;">
        
        <?php
        $filepath = "/var/craftsrv/servers/x0008/logs/latest.log";
        $file = file($filepath);
        foreach($file as $line){
        $output = str_replace("[0;30;22m", "§0", $line);
                $output = str_replace("[0;34;22m", "§1", $output);
        $output = str_replace("[0;32;22m", "§2", $output);
        $output = str_replace("[0;36;22m", "§3", $output);
        $output = str_replace("[0;31;22m", "§4", $output);
        $output = str_replace("[0;35;22m", "§5", $output);
        $output = str_replace("[0;33;22m", "§6", $output);
        $output = str_replace("[0;37;22m", "§7", $output);
        $output = str_replace("[0;30;1m", "§8", $output);
        $output = str_replace("[0;34;1m", "§9", $output);
        $output = str_replace("[0;32;1m", "§a", $output);
        $output = str_replace("[0;36;1m", "§b", $output);
        $output = str_replace("[0;31;1m", "§c", $output);
        $output = str_replace("[0;35;1m", "§d", $output);
        $output = str_replace("[0;33;1m", "§e", $output);
        $output = str_replace("[0;37;1m", "§f", $output);
        $output = str_replace("[m", "", $output);
        
            echo MineToWeb($output)."<br/>";
            
        }
        ?>
        
      </span>
    </div>
  </div>
</div>
<?php
function MineToWeb($minetext){
preg_match_all("/[^§&]*[^§&]|[§&][0-9a-z][^§&]*/", $minetext, $brokenupstrings);
$returnstring = "";
foreach ($brokenupstrings as $results){
$ending = '';
foreach ($results as $individual){
$code = preg_split("/[&§][0-9a-z]/", $individual);
preg_match("/[&§][0-9a-z]/", $individual, $prefix);
if (isset($prefix[0])){
$actualcode = substr($prefix[0], 1);
switch ($actualcode){
case "1":
$returnstring = $returnstring.'<FONT COLOR="0000AA">';
$ending = $ending ."</FONT>";
break;
case "2":
$returnstring = $returnstring.'<FONT COLOR="00AA00">';
$ending =$ending ."</FONT>";
break;
case "3":
$returnstring = $returnstring.'<FONT COLOR="00AAAA">';
$ending = $ending ."</FONT>";
break;
case "4":
$returnstring = $returnstring.'<FONT COLOR="AA0000">';
$ending =$ending ."</FONT>";
break;
case "5":
$returnstring = $returnstring.'<FONT COLOR="AA00AA">';
$ending =$ending . "</FONT>";
break;
case "6":
$returnstring = $returnstring.'<FONT COLOR="FFAA00">';
$ending =$ending ."</FONT>";
break;
case "7":
$returnstring = $returnstring.'<FONT COLOR="AAAAAA">';
$ending = $ending ."</FONT>";
break;
case "8":
$returnstring = $returnstring.'<FONT COLOR="555555">';
$ending =$ending ."</FONT>";
break;
case "9":
$returnstring = $returnstring.'<FONT COLOR="5555FF">';
$ending =$ending . "</FONT>";
break;
case "a":
$returnstring = $returnstring.'<FONT COLOR="55FF55">';
$ending =$ending ."</FONT>";
break;
case "b":
$returnstring = $returnstring.'<FONT COLOR="55FFFF">';
$ending = $ending ."</FONT>";
break;
case "c":
$returnstring = $returnstring.'<FONT COLOR="FF5555">';
$ending =$ending ."</FONT>";
break;
case "d":
$returnstring = $returnstring.'<FONT COLOR="FF55FF">';
$ending =$ending ."</FONT>";
break;
case "e":
$returnstring = $returnstring.'<FONT COLOR="FFFF55">';
$ending = $ending ."</FONT>";
break;
case "f":
$returnstring = $returnstring.'<FONT COLOR="FFFFFF">';
$ending =$ending ."</FONT>";
break;
case "l":
if (strlen($individual)>2){
$returnstring = $returnstring.'<span style="font-weight:bold;">';
$ending = "</span>".$ending;
break;
}
case "m":
if (strlen($individual)>2){
$returnstring = $returnstring.'<strike>';
$ending = "</strike>".$ending;
break;
}
case "n":
if (strlen($individual)>2){
$returnstring = $returnstring.'<span style="text-decoration: underline;">';
$ending = "</span>".$ending;
break;
}
case "o":
if (strlen($individual)>2){
$returnstring = $returnstring.'<i>';
$ending ="</i>".$ending;
break;
}
case "r":
$returnstring = $returnstring.$ending;
$ending = '';
break;
}
if (isset($code[1])){
$returnstring = $returnstring.$code[1];
if (isset($ending)&&strlen($individual)>2){
$returnstring = $returnstring.$ending;
$ending = '';
}
}
}
else{
$returnstring = $returnstring.$individual;
}

}
}

return $returnstring;
}
?>
