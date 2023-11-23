<?php
session_start();
require_once (__DIR__."/../mdb/mdbUsuario.php");
require_once (__DIR__."/../mdb/mdbMateria.php");
require_once (__DIR__."/../mdb/mdbMonitor.php");
require_once (__DIR__."/../mdb/mdbListamateriasmonitor.php");

$email = filter_input(INPUT_POST,'email');
$contraseña = filter_input(INPUT_POST,'contraseña');
$usuario = autenticarUsuario($email, $contraseña);
$ruta="";
$msg="";
$materias=[];
$materias=null;
$tipo="success";
if($usuario != null){
    $_SESSION['usuario'] = $email;
    $_SESSION['nombre'] = $usuario->getNombre()." ".$usuario->getApellido();
    $_SESSION['tipoUsuario'] = $usuario->getIdTipoUsuario();
    $_SESSION['telefono'] = $usuario->getTelefono();
    
    $idUsuario=$usuario->getIdUsuario();
    if($usuario->getIdTipoUsuario()== 0){
        $ruta="../views/dasbohar-estudiante.php";
    }
    if($usuario->getIdTipoUsuario()== 1){
        $ruta="../views/perfil_monitor.php";
        $idMonitor=obtenerIdMonitor($idUsuario);
        if($idMonitor != null){
            $idMaterias=obtenerIdMateria($idMonitor);
            $materias=obtenerMateria($idMaterias);
            $nMaterias=count($materias);
            for($i=0; $i<$nMaterias; $i++){
                $materias[$i] = $materias[$i]->getNombre();
            }
            $_SESSION['materias'] = implode(",",$materias);
        }
        else{
            $_SESSION['materias'] = "sin materias asignadas";
        }
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
