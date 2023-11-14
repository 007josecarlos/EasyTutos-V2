<?php
session_start();
require_once (__DIR__."/../../models/entidad/usuario.php");
require_once (__DIR__."/../mdb/mdbUsuario.php");

$dataUsuario = json_decode($_POST['usuario']);
$email = $dataUsuario[0];
$contraseña = $dataUsuario[1];
$nombre = $dataUsuario[2];
$apellido = $dataUsuario[3];
$hashContraseña = password_hash($contraseña,PASSWORD_DEFAULT);
$tipoUsuario=1;
$telefono=intval($dataUsuario[4]);
$msg="";
$tipo="";
$Usuario= new Usuario(NULL, $email, $hashContraseña, $nombre, $apellido, $telefono, $tipoUsuario);
$registro = registrarUsuario($Usuario);

if($registro != null){    
    $tipo="success"; //Con éxit
    $msg="la cuenta se creo correctamente.";
        
}
else{
    $msg="ya hay un usuario registrado con el mismo correo electronico o con el mismo nombre de usuario, intente de nuevo.";
    $tipo="error";
}

$resultado = [
    "msg" => $msg,
    "type" => $tipo
]; //Vector PHP

echo json_encode($resultado); // Convirtiendo en jSon

?>