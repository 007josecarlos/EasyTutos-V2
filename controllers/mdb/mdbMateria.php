<?php 
require_once (__DIR__."/../../models/DAO/materiaDAO.php");

function obtenerMateria($idUsuario){
    $dao=new MateriaDAO();
    $materias = $dao->obtenerMateria($idUsuario);
    return $materias;
}


?>