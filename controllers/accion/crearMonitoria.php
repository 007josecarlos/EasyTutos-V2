<?php 
session_start();
require_once (__DIR__."/../mdb/mdbMonitoria.php");
require_once (__DIR__."/../mdb/mdbMonitor.php");
require_once (__DIR__."/../mdb/mdbUsuario.php");
require_once (__DIR__."/../mdb/mdbUbicacion.php");
require_once (__DIR__."/../mdb/mdbMateria.php");
require_once (__DIR__."/../../models/entidad/monitoria.php");

$dataMonitoria = json_decode($_POST['monitoria']);
$fechaHora = $dataMonitoria[0];
$ubicacion = $dataMonitoria[1];
$materia = $dataMonitoria[2];
$correo = $dataMonitoria[3];
$usuario = obtenerIdUsuario($correo);
$idUsuario = $usuario->getIdUsuario();
$monitor = crearMonitor($idUsuario);
$idMonitor = obtenerIdMonitor($idUsuario);
$dataMateria = obtenerMateriaPorNombre($materia);
$idMateria = $dataMateria;
echo $idMateria;
$dataUbicacion = guardarUbicacion($ubicacion);
$idUbicacion = $dataUbicacion->getIdUbicacion();
$tipo="success";
$msg="";
$ruta="";
$monitoria=new Monitoria(NULL, $idMonitor, $idMateria, NULL, $fechaHora, $idUbicacion);
$monitoriaCreada=guardarMonitoria($monitoria);
if($monitoriaCreada!=null){
    $tipo="success";
    $msg="se ha hecho la reserva del evento exitosamente.";
    $ruta="../views/perfilAdmin.php";   
}
else{
    $tipo="error";
    $msg="ya hay una reserva hecha en la misma hora de inicio y en el mismo dia.";
    $ruta="../views/perfilAdmin.php";  
}
$resultado = [
    "msg" => $msg,
    "type" => $tipo,
    "ruta" => $ruta
]; //Vector PHP

echo json_encode($resultado); // Convirtiendo en jSon

?>