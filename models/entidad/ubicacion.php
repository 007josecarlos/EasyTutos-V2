<?php 
class Ubicacion{
    public $idUbicacion;
    public $nombre;

    public function __construct($idUbicacion, $nombre){
        $this->idUbicacion = $idUbicacion;
        $this->nombre = $nombre;
        
    }

    // Métodos GET
    public function getIdUbicacion(){
        return $this->idUbicacion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    //Metodos Set
    public function setIdUbicacion($idUbicacion){
        $this->idUbicacion = $idUbicacion;
        return $this; 
    }
    public function setNombre($nombre){
        $this->$nombre = $nombre;
        return $this; 
    }
}
?>