<?php 
require_once (__DIR__."/../../models/DAO/listamateriasmonitorDAO.php");

function obtenerIdMateria($idMonitor){
    $dao=new ListamateriasmonitorDAO();
    $idMaterias = $dao->obtenerIdMateria($idMonitor);
    return $idMaterias;
}
?>