<?php 
session_start();
require_once (__DIR__."/../mdb/mdbMateria.php");
require_once (__DIR__."/../../models/entidad/materia.php");

$dataAsignatura = json_decode($_POST['asignatura']);
$nombreMateria = $dataAsignatura[0];
$semestre = intval($dataAsignatura[1]);
$creditos = intval($dataAsignatura[2]);
$materia = new Materia(NULL,$nombreMateria,$creditos,$semestre,NULL);
$asignatura = guardarMateria($materia);
$ruta="";
$msg="";
$tipo="success";
if($asignatura != null){
    $msg="la asignatura ingresada fue guardada exitosamente.";
    $tipo="success";
    $ruta="../views/perfilAdmin.php";
}
else{
    $msg="la asignatura ingresada ya existe, verifique los datos e intentelo nuevamente.";
    $tipo="error";
    $ruta="../views/perfilAdmin.php";
}
$resultado = [
    "msg" => $msg,
    "type" => $tipo,
    "ruta" => $ruta
]; //Vector PHP

echo json_encode($resultado); // Convirtiendo en jSon
?>