<?php 
class ListaMateriasEstudiante{
    public $idEstudiante;
    public $idMateria;

    public function __construct($idEstudiante, $idMateria){
        $this->idEstudiante = $idEstudiante;
        $this->idMateria = $idMateria;
        
    }

    // Métodos GET
    public function getIdEstudiante(){
        return $this->idEstudiante;
    }

    public function getIdMateria(){
        return $this->idMateria;
    }

    //Metodos Set
    public function setIdEstudiante($idEstudiante){
        $this->idEstudiante = $idEstudiante;
        return $this; 
    }
    public function setIdMateria($idMateria){
        $this->$idMateria = $idMateria;
        return $this; 
    }
}
?>