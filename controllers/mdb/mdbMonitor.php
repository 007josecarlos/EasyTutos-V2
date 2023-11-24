<?php 
require_once (__DIR__."/../../models/DAO/monitorDAO.php");

function obtenerIdMonitor($idUsuario){
    $dao=new MonitorDAO();
    $idMonitor = $dao->obtenerIdMonitor($idUsuario);
    return $idMonitor;
}

function crearMonitor($idUsuario){
    $dao=new MonitorDAO();
    $idMonitor = $dao->crearMonitor($idUsuario);
    return $idMonitor;
}

?>