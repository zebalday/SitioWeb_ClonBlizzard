<?php 
session_start();
// IMPORTAMOS CLASES DE BASE DE DATOS
require_once './Database.php';
require_once './Usuario.php';

// CAPTURAMOS DATOS DEL FORMULARIO
$NOMBRE = $_POST["nombre"];
$APELLIDO = $_POST["apellido"];
$DIANACIMIENTO = $_POST["dia"];
$MESNACIMIENTO = $_POST["mes"];
$ANONACIMIENTO = $_POST["ano"];
$CORREO = $_SESSION["MAIL"];
$PASS = $_POST["password"];
$PAIS = $_POST["comboPais"];
$PREGUNTA = $_POST["comboPregunta"];
$RESPUESTA = $_POST["respuesta"];

var_dump($_POST["nombre"]);
var_dump($_POST["apellido"]);
var_dump($_POST["dia"]);
var_dump($_POST["mes"]);
var_dump($_POST["ano"]);
var_dump($CORREO);
var_dump($_POST["password"]);
var_dump($_POST["comboPais"]);
var_dump($_POST["comboPregunta"]);
var_dump($_POST["respuesta"]);


// CREAMOS OBJETO DE USUARIO
$USUARIO = new Usuario();
$USUARIO = $USUARIO->__construct1($NOMBRE, $APELLIDO, $DIANACIMIENTO, $MESNACIMIENTO, $ANONACIMIENTO, $CORREO, $PASS, $PAIS, $PREGUNTA, $RESPUESTA);




?>