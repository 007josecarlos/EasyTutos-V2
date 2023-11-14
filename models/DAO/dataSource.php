<?php

function conexionSqli(){
$conexion = mysqli_connect("localhost", "root", "", "easytutosdb");

return $conexion;
}
?>