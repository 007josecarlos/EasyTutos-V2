<?php 
require_once (__DIR__."/../../models/DAO/monitoriaDAO.php");

function guardarMonitoria(Monitoria $monitoria){
    $dao=new MonitoriaDAO();
    $monitoria = $dao->guardarMonitoria($monitoria);
    return $monitoria;
}

?>