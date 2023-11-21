<?php 
require_once (__DIR__."/../../models/DAO/materiaDAO.php");

function obtenerMateria($idMaterias){
    $dao=new MateriaDAO();
    $materias = $dao->obtenerMateria($idMaterias);
    return $materias;
}


?>