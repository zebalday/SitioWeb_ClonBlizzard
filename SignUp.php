<?php
if (isset($_GET['mail'])){$mail = $_GET['mail'];}
else{$mail = "Mi cuenta";}
?>

<?php
require_once './Database.php';
$database = new BD();
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

    <div class="tablaRegistro">

        <form action="A_Registro.php" method="POST" name="formulario">
        
            <p class="pBlanca">Comienza tu aventura con una cuenta de Bleezard.</p><br>
            <select class="comboPais" name="comboPais" required>
                <?php
                $database->llenarPaises();
                ?>
            </select>

            <div class="nombreApellidoContanier">
                <input type="text" name="nombre" class="textboxNomAp" placeholder="Nombre" maxlength="30" required>
                <input type="text" name="apellido" class="textboxNomAp" placeholder="Apellido" maxlength="30" required>
            </div>

            <div class="nacimientoContanier">
                <input type="number" name="dia" class="textboxNacimiento" placeholder="Día de Nacimiento" min="1" max="31" required>
                <select class="comboMes" name="mes" required>
                    <option value="" disabled selected hidden>Mes</option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                </select>
                <input type="number" name="ano" class="textboxNacimiento" placeholder="Año" min="1930" max="2022" required>
            </div>


            <input type="email" name="correo" class="textboxCorreo" placeholder="Dirección de correo electrónico" maxlength="25" name="mail" required>

            <input type="password" name="password" class="textboxPwd" placeholder="Contraseña" maxlength="20" required>
            
            <select class="comboPregunta" name="comboPregunta" required>
                <?php
                $database->llenarPreguntas();
                ?>
            </select>
            
            <input type="text" name="respuesta" class="textboxRespuesta" placeholder="Respuesta secreta" required>

            <input type="checkbox" value="Sí" id="recibirNoticias">
            <label for="recibirNoticias" class="pBlanca">Recibir noticias y ofertas especiales de Bleezard Entreteinment por email.</label>
            <p class="pGris">Noticias cuidadosamente seleccionadas y ofertas especiales de productos y servicios de Bleezard por email.</p><br>
            <input type="submit" class="botonRegistro" value="Crear una cuenta gratuita"><br>
            </form>

        <form action="Login.php">
            <input type="submit" class="botonYatengo" value="¿Ya tienes una cuenta?" />
        </form>

    </div><br><br><br>

    <!--TERMINA FORMULARIO DE REGISTRO-->

    
    <footer>ZEBALDAY & CHUTITOS | Todos los derechos reservados &copy;</footer>

    </body>
</html>