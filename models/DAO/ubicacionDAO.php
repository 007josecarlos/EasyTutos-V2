<?php 
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/ubicacion.php");
class ubicacionDAO{
    function guardarUbicacion($ubicacion){
        $ubicacionCreada=new Ubicacion(NULL,$ubicacion);
        $consulta = "INSERT INTO ubicaciones (nombre) VALUES('$ubicacion')";
        $conexionAux=conexionSqli();
        $verificarUbicacion=mysqli_query($conexionAux, "SELECT * FROM ubicaciones WHERE nombre='$ubicacion'");

        if(mysqli_num_rows($verificarUbicacion) >= 1){
            $ubicacionConsul = mysqli_fetch_row($verificarUbicacion);
            mysqli_close($conexionAux);
            $idUbicacion = $ubicacionConsul[0];
            $ubicacionCreada->setIdUbicacion($idUbicacion);
            return $ubicacionCreada;
        }
        mysqli_close($conexionAux);
        $conexionInsertar=conexionSqli();
        mysqli_query($conexionInsertar, $consulta);
        $verificarUbicacion=mysqli_query($conexionInsertar, "SELECT * FROM ubicaciones WHERE nombre='$ubicacion'");
        if(mysqli_affected_rows($conexionInsertar)>0){
            $ubicacionConsul = mysqli_fetch_row($verificarUbicacion);
            mysqli_close($conexionInsertar);
            $idUbicacion = $ubicacionConsul[0];
            $ubicacionCreada->setIdUbicacion($idUbicacion);
            return $ubicacionCreada;  
        }
        mysqli_close($conexionInsertar);
    }
}
?>