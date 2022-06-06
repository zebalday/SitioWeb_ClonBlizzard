<?php 
// IMPORTAMOS CLASES DE BASE DE DATOS
require_once './Database.php';
require_once './Usuario.php';

// CAPTURAMOS DATOS PROVENIENTES DEL FORMULARIO Y
// DECLARAMOS VARIABLES DE SESIÓN 
$MAIL = $_POST["mail"];
$PASSWORD = $_POST["password"];

// CREAMOS OBJETO DE USUARIO
$USER = new Usuario();
$USER = $USER->__construct2($MAIL, $PASSWORD);

// REALIZAMOS BÚSQUEDA EN LA BASE DE DATOS 
$DATABASE = new BD();

session_start();

if($DATABASE->searchUser($USER)){
    $resultado = $DATABASE->searchUser($USER);
    $usuraio = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    if ($PASSWORD == $usuraio['con_usu']){
        $_SESSION["MAIL"] = $usuraio['cor_usu'];
        header("Location: Index.php");
        exit();
    }
    else{
        $_SESSION["MAIL"] = null;
        header("Location: Login.php");
        exit();

    }
}
else{
    $_SESSION["MAIL"] = null;
    header("Location: Login.php");
    exit();
}
?>