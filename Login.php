<?php
session_start();
if (isset($_SESSION['MAIL'])){
    header("Location: Perfil.php");
    exit();}
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

    <ul class="topnav">
        <li><a href="Index.php"><img class="blizzardimg" src="Imagenes/blizzard.png" alt="Logo Blizzard"></a></li>
        <li class="right"><a href="Login.php">Mi cuenta</a></li>
    </ul>
    
    <!--TERMINA EL BANNER-->

    <header><h1>| INICIO DE SESIÓN</h1></header><br>

    <h2 class="blizzard">Ingrese sus credenciales.</h2>


    <!--COMIENZA FORMULARIO DE INGRESO-->

    <div class="login">

        <form action="A_InicioSesion.php" method="POST">
            <img class="blizzardImgLogin" src="Imagenes/blizzard.png" alt="Logo Blizzard"><br><br>

            <input type="email" name="mail" class="textboxCorreoLogin" placeholder="Dirección de correo electrónico" maxlength="30" name="mail" required><br><br>
            <input type="password" name="password" class="textboxPwdLogin" placeholder="Contraseña" maxlength="30" required><br><br>

            <input type="submit" class="botonLogin" value="Iniciar sesión"><br><br>
        </form>

        <a href="SignUp.php" class="crearCuenta">Crear cuenta</a>
    </div><br><br><br>

    <!--TERMINA FORMULARIO DE INGRESO-->


    <footer class="footerLogin">ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>


    </body>
</html>