<?php
session_start();
if (isset($_SESSION['MAIL'])){$mail = $_SESSION['MAIL'];}
else{$mail = "Mi cuenta";}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles.css"/>
    <title>Blezzard Entreteinment | Evaluación WEB</title></head>
    
    <body class="bodySc2">

    <!--COMIENZA EL BANNER-->
    
    <ul class="topnav">
        <li><a href="Index.php"><img class="blizzardimg" src="Imagenes/blizzard.png" alt="Logo Blizzard"></a></li>
        <li class="right"><a href="Login.php"><?php echo $mail;?></a></li>
        <?php
        if (isset($_SESSION['MAIL'])){
            echo '<li class="right"><a href="A_TerminarSesion.php"><img src="Imagenes/logout.png" height="20px" width="20px" float="right"></a></li>';
        }
        ?>
    </ul>

    <!--TERMINA EL BANNER-->


    <header><h1>| STARCRAFT II</h1></header><br>

    <h2 class="blizzard">Estrategia en tiempo real.</h2><br>


    <!--COMIENZA GRUPO DE INFOCARDS-->

    <div class="grupoInfocard">
        <div class="infocard">
            <div class="imgDetail">
                <img src="Imagenes/imgDetail-1.jpg" alt="Campaña">
            </div>
            <div class="infocard_block">
                <h4 class="infocard_block_title">Campaña de Wings of Liberty</h4>
                <p class="infocard_block_desc">La galardonada campaña de historia de <em>Starcarft II: Wings of Liberty</em> está disponible completamente gratis.</p>
            </div>
        </div>

        <div class="infocard">
            <div class="imgDetail">
                <img src="Imagenes/imgDetail-2.jpg" alt="Versus">
            </div>
            <div class="infocard_block">
                <h4 class="infocard_block_title">Modo versus</h4>
                <p class="infocard_block_desc">Accede a los modos de partidas no clasificatorias  y contra la IA de forma gratuita; desbloquea las partidas clasificatorias con las 10 primeras victorias del día en partidas no clasificatorias o contra la IA.
                </p>
            </div>
        </div>

        <div class="infocard">
            <div class="imgDetail">
                <img src="Imagenes/imgDetail-3.jpg" alt="Comandantes">
            </div>
            <div class="infocard_block">
                <h4 class="infocard_block_title">Comandantes hasta nivel 5</h4>
                <p class="infocard_block_desc">Kerrigan, Raynor y Artanis son completamente gratis; el resto de comandantes son gratis hasta el nivel 5.</p>
            </div>
        </div>
    </div><br><br>
    
    <!--TERMINA GRUPO DE INFOCARDS-->

    
    <!--VIDEOCLIP TRAILER DEL JUEGO-->

    <div class="video"><iframe width="420" height="315" class="trailer" src="https://youtube.com/embed/dYUc2utsLuo"></iframe></div><br>

    


    <footer>ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>


    </body>
</html>