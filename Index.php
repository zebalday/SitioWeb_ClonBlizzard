<?php
session_start();
if (isset($_SESSION['MAIL'])){$mail = $_SESSION['MAIL'];}
else{$mail = "Mi cuenta";}
?>

<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Blezzard Entreteinment, Compañia de videojuegos">
        <link rel="stylesheet" href="Styles.css"/>
        <title>Blezzard Entreteinment | Evaluación WEB</title>
    </head>
    
    <body>

    <!--COMIENZA EL BANNER-->

    <!--Aquí hacemos uso de la variable con php y la mostramos en el banner-->

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

    <header><h1>| JUEGOS DESTACADOS</h1></header><br>

    <h2 class="blizzard">Blizzard</h2>

    <!--COMIENZA TABLA DE JUEGOS-->

    <div class="tabla">
        <table>
            <tr>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/hots.jpg" alt="Heroes of The Storm"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/w3r.jpg" alt="Warcraft III Reforged"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/d4.jpg" alt="Diablo IV"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/d2.jpg" alt="Diablo II Resurrected"></div></div></td>
                <td><a href="Detail.php"><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/sc2.jpg" alt="Starcraft II" title="StarCraft II" class="sc2"></div></div></a></td>
            </tr>
            <tr>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/ow.jpg" alt="Overwatch"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/ogW.jpg" alt="Warcraft"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/wow.jpg" alt="World Of Warcarft"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/hs.jpg" alt="Hearthstone"></div></div></td>
                <td><div class="container"><div class="box"><img src="Imagenes/imagenesjuegos/formateadas/scr.jpg" alt="Starcraft Remastered"></div></div></td>
            </tr>
        </table>
    </div><br><br><br>

    <!--TERMINA TABLA DE JUEGOS-->

    <footer>ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>


    </body>
</html>

