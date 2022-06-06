<?php 

// IMPORTAMOS CLASES DE BASE DE DATOS
require_once './Database.php';
require_once './Usuario.php';

// CAPTURAMOS DATOS DEL FORMULARIO
$NOMBRE = $_POST["nombre"];
$APELLIDO = $_POST["apellido"];
$DIANACIMIENTO = $_POST["dia"];
$MESNACIMIENTO = $_POST["mes"];
$ANONACIMIENTO = $_POST["ano"];
$CORREO = $_POST["correo"];
$PASS = $_POST["password"];
$PAIS = $_POST["comboPais"];
$PREGUNTA = $_POST["comboPregunta"];
$RESPUESTA = $_POST["respuesta"];


// CREAMOS OBJETO DE USUARIO
$USUARIO = new Usuario();
$USUARIO = $USUARIO->__construct1($NOMBRE, $APELLIDO, $DIANACIMIENTO, $MESNACIMIENTO, $ANONACIMIENTO, $CORREO, $PASS, $PAIS, $PREGUNTA, $RESPUESTA);

// CREAMOS OBJETO DE BD E INSERTAMOS OBJETO USUARIO EN LA BD
$DATABASE = new BD();

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf8_general_ci"/>
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

    <header><h1>| REGISTRO DE USUARIO</h1></header><br>

    <h2 class="blizzard">Ingrese sus datos.</h2>


    <!--COMIENZA FORMULARIO DE REGISTRO-->

    <style>
        h1.registro{
        font-family: Sans-serif;
        text-align: center;
        color: white;
        font-size: larger;
        padding: 0px 5%;
        }

        p.registro{
        text-align: center;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        font-size: small;
        color: white;
        opacity: 100%
        }

        .volver{
        color: white;
        border-color: cyan;
        background-color:rgb(11, 164, 234);
        opacity: 100%;
        width: 100%;
        font-size: medium;
        }
    </style>



    <div class="tablaRegistro">

    <?php 
        if ($DATABASE->addUser($USUARIO)){echo "<h1 class='registro' >Usuario registrado con éxito.</h1>";}
        
        else {echo "<h1 class='registro'>Error al registrar.</h1>";}
    ?>
    
    <br>
    <button type="submit" class="volver"><a href="Login.php">Volver</a></button>
    </div><br><br><br>

    <!--TERMINA FORMULARIO DE REGISTRO-->

    
    <footer>ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>

    </body>
</html>
