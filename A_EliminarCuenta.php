<?php 
session_start();
require_once './Database.php';
require_once './Usuario.php';

// CREAMOS USUARIO A ELIMINAR
$usuario = new Usuario();
$correo = $_SESSION["MAIL"];
$usuario->setCorreo($correo);

// REALIZAMOS DELETE EN LA BASE DE DATOS
$database = new BD();
if($database->deleteUser($usuario)){
    session_destroy();
    header("Location: Index.php");
    exit();
}
else{
    header("Location: Perfil.php");
    exit();
}
// TERMINAMOS SESION Y REDIRECCIONAMOS
?>