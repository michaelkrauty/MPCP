<body onLoad='scroll()'>
<div style="width:100%;margin:3px 0;">
  <div style="height:95%;border:1px solid #C9C9C9;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;color:#939391;background:#272922;padding:4px 2px 4px 4px;">
    <div style="overflow-y:scroll;overflow-x:auto;height:100%;">
      <span id="consoleviewerwindow" style="font-family:'Consolas','Lucidia Console','Courier New',Monospace;">
        
      <div id="echo"><?php include_once "echo.inc.php"; ?></div>
      
      </span>
    </div>
  </div>
</div>
<script>
    var auto_refresh = setInterval( function () {
    $('#echo').load("echo.inc.php");
    }, 2000);
</script>
</body>
