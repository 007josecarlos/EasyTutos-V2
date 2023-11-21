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
}

?>