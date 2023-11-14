<?php 
class Tema{
    public $idTema;
    public $nombre;
    public $contenidos;
    public $idMateria;

    public function __construct($idTema, $nombre, $contenidos, $idMateria){
        $this->idTema = $idTema;
        $this->nombre = $nombre;
        $this->contenidos = $contenidos;
        $this->idMateria = $idMateria;
        
    }
    
    // Métodos GET
    public function getIdTema(){
        return $this->idTema;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getContenidos(){
        return $this->contenidos;
    }

    public function getIdMateria(){
        return $this->idMateria;
    }

    //Metodos Set
    public function setIdTema($idTema){
        $this->idTema = $idTema;
        return $this; 
    }
    public function setNombre($nombre){
        $this->$nombre = $nombre;
        return $this; 
    }
    public function setContenidos($contenidos){
        $this->$contenidos = $contenidos;
        return $this; 
    }
    public function setIdMateria($idMateria){
        $this->$idMateria = $idMateria;
        return $this; 
    }

}
?>