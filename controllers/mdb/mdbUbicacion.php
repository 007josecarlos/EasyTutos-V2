<?php 
require_once (__DIR__."/../../models/DAO/ubicacionDAO.php");

function guardarUbicacion($ubicacion){
    $dao=new ubicacionDAO();
    $ubicacion = $dao->guardarUbicacion($ubicacion);
    return $ubicacion;
}

?>