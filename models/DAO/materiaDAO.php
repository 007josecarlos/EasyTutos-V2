<?php
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/materia.php");
class MateriaDAO{
    function obtenerMateria($idUsuario){
        $conexion=conexionSqli();
        $monitor=mysqli_query($conexion, "SELECT idMonitor FROM monitores WHERE idUsuario='$idUsuario'");
        $monitorConsul = null;
        $idMonitor = null;
        if(mysqli_num_rows($monitor) >= 1){
            $monitorConsul = mysqli_fetch_row($monitor);
            $idMonitor = $monitorConsul[0];
        }
        $materias=mysqli_query($conexion, "SELECT idMateria FROM listamateriasmonitor WHERE idMonitor='$idMonitor'");
        mysqli_close($conexion);
        if(mysqli_num_rows($materias) <= 0){
            return null;
        }
        $materiasMon=[];
        $materiasMon=null;
        while($listaMaterias = mysqli_fetch_array($materias)){
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