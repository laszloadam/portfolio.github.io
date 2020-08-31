<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>
<body onload="startTime()">
    <div class="wrapper">
        <div class="banner">
        <p>Látogató észlelve...<br>
            * Üdvözöllek a hálózatomon! *
        </p>
        </div>
            <div class="content">
                <nav>
                    <label for="menu" class="menu-btn">
                        MENÜ
                    </label>
                    <input type="checkbox" id="menu">
                
                    <ul class="nav1">
                        <li><a href="index.php">Magamról</a></li>
                        <li><a href="index.php?op=referenc">Referencia</a></li>
                        <li class="has-submenu"><a href="">Almenük<div class="arrow">⯈</div></a>
                            <ul class="submenu">
                                <li>Első</li>
                                <li>Második</li>
                                <li>Harmadik</li>
                            </ul>
                        </li>
                        <li><a href="index.php?op=contact">Kapcsolat</a></li>
                        <li style="margin:10px 0 5px 2px; line-height:40px; border-top: 2px solid #39e600;">&#9635 Online</li>
                        <li><a href="">Beállítások</a></li>
                        <li><a href="">Nyomtatás</a></li>
                        <li><a href="../index.html">Kilépés</a></li>
                    </ul>
                </nav>
                <main>
                    <?php
                        if(isset($_GET["op"]) && $_GET["op"]!="") {
                        $op = $_GET["op"];
                        if (file_exists("inc/".$op.".php")) {
                            include_once ("inc/".$op.".php");
                            } else {
                                include_once ("inc/404.php");
                                }
                        } else {
                            include_once ("inc/main.php");
                        }
                    ?>
                </main>
                <footer>
                <div class="left">Copyright szöveg</div>
                <div class="right">
                    
                    <div id="clock" style="color:black; font-weight:bold;"></div>
                    <div>
                </footer>
            </div>
        </div>
</body>
</html>