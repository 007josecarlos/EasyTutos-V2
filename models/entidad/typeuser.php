<?php 
class Typeuser{
    public $idTypeUser;
    public $nombre;

    public function __construct($idTypeUser, $nombre){
        $this->idTypeUser = $idTypeUser;
        $this->nombre = $nombre;
        
    }

    // Métodos GET
    public function getIdTypeUser(){
        return $this->idTypeUser;
    }

    public function getNombre(){
        return $this->nombre;
    }

    //Metodos Set
    public function setIdTypeUser($idTypeUser){
        $this->idTypeUser = $idTypeUser;
        return $this; 
    }
    public function setNombre($nombre){
        $this->$nombre = $nombre;
        return $this; 
    }
}
?>