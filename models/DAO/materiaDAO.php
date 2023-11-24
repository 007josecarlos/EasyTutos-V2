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
    function guardarMateria($materia){
        $nombre=$materia->getNombre();
        $creditos=$materia->getCreditos();
        $semestre=$materia->getSemestre();
        $materiaGuardada=new Materia(NULL,$nombre,$creditos,$semestre,NULL);
        $consulta = "INSERT INTO materias (nombre, creditos, semestre) VALUES('$nombre', '$creditos', '$semestre')";

        $conexionAux=conexionSqli();
        $verificarMateria=mysqli_query($conexionAux, "SELECT * FROM materias WHERE nombre='$nombre'");
        mysqli_close($conexionAux);
        
        if(mysqli_num_rows($verificarMateria) > 0){
            return null;
        }
        $conexionInsertar=conexionSqli();
        mysqli_query($conexionInsertar, $consulta);
        if(mysqli_affected_rows($conexionInsertar)>0){
            mysqli_close($conexionInsertar);
            return $materiaGuardada;  
        }
        mysqli_close($conexionInsertar);
    }
    function obtenerMateriaPorNombre($materia){
        $consulta = "SELECT * FROM materias WHERE nombre ='$materia'";
        $conexion = conexionSqli();
        $consultaMateria = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        $materia = null;
        $materiaConsul = null;
        if(mysqli_num_rows($consultaMateria) == 1){
            $materiaConsul = mysqli_fetch_row($consultaMateria);
                $materia = new Materia(
                $materiaConsul[0],
                $materiaConsul[1],
                $materiaConsul[2],
                $materiaConsul[3],
                $materiaConsul[4],
            );
        }
        
        return $materiaConsul[0];
    }
}
?>