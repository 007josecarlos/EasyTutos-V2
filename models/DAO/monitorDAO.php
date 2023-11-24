<?php 
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/monitor.php");
class MonitorDAO{
    function obtenerIdMonitor($idUsuario){
        $conexion=conexionSqli();
        $monitor=mysqli_query($conexion, "SELECT idMonitor FROM monitores WHERE idUsuario='$idUsuario'");
        $monitorConsul = null;
        $idMonitor = null;
        if(mysqli_num_rows($monitor) >= 1){
            $monitorConsul = mysqli_fetch_row($monitor);
            $idMonitor = $monitorConsul[0];
        }
        mysqli_close($conexion);
        return $idMonitor;
    }
    function crearMonitor($idUsuario){
        $monitorCreado=new Monitor(NULL,NULL,$idUsuario);
        $consulta = "INSERT INTO monitores (idUsuario) VALUES('$idUsuario')";
        $conexionAux=conexionSqli();
        $verificarMonitor=mysqli_query($conexionAux, "SELECT * FROM monitores WHERE idUsuario='$idUsuario'");
        mysqli_close($conexionAux);
        
        if(mysqli_num_rows($verificarMonitor) > 0){
            return null;
        }
        $conexionInsertar=conexionSqli();
        mysqli_query($conexionInsertar, $consulta);
        if(mysqli_affected_rows($conexionInsertar)>0){
            mysqli_close($conexionInsertar);
            return $monitorCreado;  
        }
        mysqli_close($conexionInsertar);
    }
}

?>