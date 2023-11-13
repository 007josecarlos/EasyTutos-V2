<?php
session_start();
require_once (__DIR__."/../mdb/mdbUsuario.php");

$email = filter_input(INPUT_POST,'email');
$contraseña = filter_input(INPUT_POST,'contraseña');
$usuario = autenticarUsuario($email, $contraseña);
$ruta="";
$msg="";
$tipo="success";
if($usuario != null){
    $msg="el usuario ingresado si existe.";
    $tipo="success";
}
else{
    $msg="el usuario ingresado no existe, verifique los datos e intentelo nuevamente.";
    $tipo="error";
}
$resultado = [
    "msg" => $msg,
    "type" => $tipo
]; //Vector PHP

echo json_encode($resultado); // Convirtiendo en jSon
?>