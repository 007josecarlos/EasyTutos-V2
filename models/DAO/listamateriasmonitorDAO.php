<?php 
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/listamateriasmonitor.php");
class ListamateriasmonitorDAO{
    function obtenerIdMateria($idMonitor){
        $conexion=conexionSqli();
        $materias=mysqli_query($conexion, "SELECT idMateria FROM listamateriasmonitor WHERE idMonitor='$idMonitor'");
        mysqli_close($conexion);
        if(mysqli_num_rows($materias) <= 0){
            return null;
        }
        return $materias;
    }
}
?>