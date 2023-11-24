<?php 
require_once (__DIR__."/../../models/DAO/usuarioDAO.php");

function autenticarUsuario($email, $contraseña){
    $dao=new UsuarioDAO();
    $usuario = $dao->autenticarUsuario($email, $contraseña);
    return $usuario;
}

function registrarUsuario(Usuario $usuario){
    $dao=new UsuarioDAO();
    $usuario2 = $dao->registrarUsuario($usuario);
    return $usuario2;
}

function obtenerIdUsuario($correo){
    $dao=new UsuarioDAO();
    $usuario = $dao->obtenerIdUsuario($correo);
    return $usuario;
}
?>