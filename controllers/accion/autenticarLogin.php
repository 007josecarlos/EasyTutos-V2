<?php
session_start();
require_once (__DIR__."/../mdb/mdbUsuario.php");

$email = filter_input(INPUT_POST,'email');
$contraseña = filter_input(INPUT_POST,'contraseña');
$usuario = autenticarUsuario($email, $contraseña);
$ruta="";
$msg="";
$ruta="";
$tipo="success";

if($usuario != null){
    $_SESSION['usuario'] = $email;
    $_SESSION['nombre'] = $usuario->getNombre()." ".$usuario->getApellido();
    $_SESSION['tipoUsuario'] = $usuario->getIdTipoUsuario();
    if($usuario->getIdTipoUsuario()== 0){
        $ruta="../views/dasbohar-estudiante.php";
    }
    if($usuario->getIdTipoUsuario()== 1){
        $ruta="../views/perfil_monitor.php";
    }
    if($usuario->getIdTipoUsuario()== 2){
        $ruta="../views/perfilAdmin.php";
    }

    $tipo="success";
}
else{
    $msg="el usuario ingresado no existe, verifique los datos e intentelo nuevamente.";
    $tipo="error";
}
$resultado = [
    "msg" => $msg,
    "type" => $tipo,
    "ruta" => $ruta
]; //Vector PHP

echo json_encode($resultado); // Convirtiendo en jSon
?>
