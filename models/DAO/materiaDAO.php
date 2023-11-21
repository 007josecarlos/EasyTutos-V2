<?php
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/materia.php");
class MateriaDAO{
    function obtenerMateria($idMaterias){
        $materiasMon=[];
        $materiasMon=null;
        while($listaMaterias = mysqli_fetch_array($idMaterias)){
            $idMateria=$listaMaterias['idMateria'];
            $conexion=conexionSqli();
            $datosMaterias=mysqli_query($conexion, "SELECT * FROM materias WHERE idMateria='$idMateria'");
            mysqli_close($conexion);
            $datosMateriasList=mysqli_fetch_row($datosMaterias);
            $materia= new Materia(
                $datosMateriasList[0],
                $datosMateriasList[1],
                $datosMateriasList[2],
                $datosMateriasList[3],
                $datosMateriasList[4]
            );
            $materiasMon[]=$materia;
        }
        return $materiasMon;
    }
}
?>