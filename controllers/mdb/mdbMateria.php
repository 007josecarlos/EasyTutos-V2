<?php 
require_once (__DIR__."/../../models/DAO/materiaDAO.php");

function obtenerMateria($idMaterias){
    $dao=new MateriaDAO();
    $materias = $dao->obtenerMateria($idMaterias);
    return $materias;
}

function guardarMateria($materia){
    $dao=new MateriaDAO();
    $materia = $dao->guardarMateria($materia);
    return $materia;
}
function obtenerMateriaPorNombre($materia){
    $dao=new MateriaDAO();
    $dataMateria = $dao->obtenerMateriaPorNombre($materia);
    return $dataMateria;
}

?>