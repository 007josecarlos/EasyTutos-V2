<?php 
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/monitoria.php");
class MonitoriaDAO{
    function guardarMonitoria($Monitoria){
        $idMonitor = $Monitoria->getIdMonitor();
        $idMateria = $Monitoria->getIdMateria();
        $idTema = $Monitoria->getIdTema(); 
        $horaDia = $Monitoria->getHoraDia();
        $idUbicacion = $Monitoria->getIdUbicacion();
        $usuarioRegistrado = new Monitoria(NULL, $idMonitor, $idTema, $idMateria, $horaDia, $idUbicacion);
        $consulta = "INSERT INTO monitorias (idMonitor, idMateria, horaDia, idUbicacion) 
                     VALUES('$idMonitor','$idMateria','$horaDia','$idUbicacion')";

        $conexionAux=conexionSqli();
        $verificarUsuario=mysqli_query($conexionAux, "SELECT * FROM monitorias WHERE idMonitor='$idMonitor' AND horaDia='$horaDia'");
        mysqli_close($conexionAux);
        
        if(mysqli_num_rows($verificarUsuario) > 0){
            return null;
        }
        $conexionInsertar=conexionSqli();
        mysqli_query($conexionInsertar, "INSERT INTO monitorias (idMonitor, idMateria, horaDia, idUbicacion) 
        VALUES('$idMonitor', '$idMateria', '$horaDia', '$idUbicacion')");
        if(mysqli_affected_rows($conexionInsertar)>0){
            mysqli_close($conexionInsertar);
            return $usuarioRegistrado;  
        }
        mysqli_close($conexionInsertar);
        
    }
}
?>