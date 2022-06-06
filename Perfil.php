<?php
require_once './Database.php';
require_once './Usuario.php';
$database = new BD();

// OBTENEMOS EL MAIL DEL USUARIO
session_start();
if (!isset($_SESSION['MAIL'])){
    header("Location: Login.php");
    exit();}
else{
    $mail = $_SESSION['MAIL'];
    $USER = new Usuario();
    $USER->setCorreo($mail);
    $resultado = $database->searchUser($USER);
    $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

    
    //CAPTURAMOS DATOS DEL USUARIO
    $nombre = $usuario["nom_usu"];
    $apellido = $usuario["apl_usu"];
    $dia = $usuario["dia_usu"];
    $mes = $usuario["mes_usu"];
    $ano = $usuario["aio_usu"];
    $pais = $usuario["pas_usu"];
    $correo = $usuario["cor_usu"];
    $pw = $usuario["con_usu"];
    $pregunta = $usuario["pre_usu"];
    $respuesta = $usuario["res_usu"];

}

// CREAMOS OBJETO USUSARIO Y CONSULTAMOS LA BD POR SUS DATOS

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
        <li class="right"><a href="Login.php"><?php echo $mail; ?></a></li>
        <?php
        if (isset($_SESSION['MAIL'])){
            echo '<li class="right"><a href="A_TerminarSesion.php"><img src="Imagenes/logout.png" height="20px" width="20px" float="right"></a></li>';
        }
        ?>
    </ul>;
    
    <!--TERMINA EL BANNER-->

    <header><h1>| CUENTA DE USUARIO</h1></header><br>
    <h2 class="blizzard">Datos Personales.</h2>


    <!--COMIENZA FORMULARIO DE PERFIL-->

    <div class="tablaPerfil">

        <form action="A_ModificarCuenta.php" method="POST" name="formulario">

            <div class="nombreApellidoPerfilContanier">
                <p class="pBlancaPerfil">Nombre</p>
                <input type="text" name="nombre" class="textboxNomAp" placeholder="Nombre" maxlength="30" value=<?php echo $nombre; ?> required>
                <p class="pBlancaPerfil">Apellido</p>
                <input type="text" name="apellido" class="textboxNomAp" placeholder="Apellido" maxlength="30"  value="<?php echo $apellido; ?>" required>
            </div>

            <div class="nacimientoContanier">
                <p class="pBlancaPerfil">Fecha de Nacimiento</p>
                <input type="number" name="dia" class="textboxNacimiento" placeholder="Día de Nacimiento" min="1" max="31" value="<?php echo $dia; ?>" required>
                <select class="comboMes" name="mes" required><option value="" disabled selected hidden><?php echo $mes; ?></option>
                    <option value="ene">Enero</option>
                    <option value="feb">Febrero</option>
                    <option value="mar">Marzo</option>
                    <option value="abr">Abril</option>
                    <option value="may">Mayo</option>
                    <option value="jun">Junio</option>
                    <option value="jul">Julio</option>
                    <option value="ago">Agosto</option>
                    <option value="sep">Septiembre</option>
                    <option value="oct">Octubre</option>
                    <option value="nov">Noviembre</option>
                    <option value="dic">Diciembre</option></select>
                <input type="number" name="ano" class="textboxNacimiento" placeholder="Año" min="1930" max="2022" value="<?php echo $ano; ?>" required>
            </div>
            
            <p class="pBlancaPerfil">Pais</p>
            <select class="comboPais" name="comboPais">
                <option disabled selected hidden><?php echo $pais; ?></option>
                <?php
                $database->llenarPaises();
                ?>
            </select>

            <p class="pBlancaPerfil">Correo</p>
            <input type="mail" name="correo" class="textboxMail" placeholder="Correo" maxlength="50" value="<?php echo $correo; ?>" required disabled>

            <p class="pBlancaPerfil">Contraseña</p>
            <input type="password" name="password" class="textboxPwd" placeholder="Contraseña" maxlength="50" value="<?php echo $pw; ?>" required>
            
            <p class="pBlancaPerfil">Pregunta Secreta</p>
            <select class="comboPregunta" name="comboPregunta" required>
                <option disabled selected hidden><?php echo $pregunta; ?></option>
                <?php
                $database->llenarPreguntas();
                ?>
            </select>
            
            <p class="pBlancaPerfil">Respuesta</p>
            <input type="text" name="respuesta" class="textboxRespuesta" placeholder="Respuesta secreta" value="<?php echo $respuesta; ?>" required>

            <div class="botonesPerfilContainer">

            <input type="submit" class="botonModificarCuenta" value="Guardar Cambios">
            </form>

        <form action="A_EliminarCuenta.php" method="POST">
            <input type="submit" class="botonEliminarCuenta" value="Eliminar Cuenta" />
        </form>
    </div>
    </div><br><br><br>

    <!--TERMINA FORMULARIO DE REGISTRO-->

    
    <footer>ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>

    </body>
</html>