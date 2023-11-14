<?php 
class Estudiante{
    public $idEstudiante;
    public $semestre;
    public $idUsuario;

    public function __construct($idEstudiante, $semestre, $idUsuario){
        $this->idEstudiante = $idEstudiante;
        $this->semestre = $semestre;
        $this->idUsuario = $idUsuario;
        
    }
    
    // Métodos GET
    public function getIdEstudiante(){
        return $this->idEstudiante;
    }

    public function getSemestre(){
        return $this->semestre;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    //Metodos Set
    public function setIdEstudiante($idEstudiante){
        $this->idEstudiante = $idEstudiante;
        return $this; 
    }
    public function setSemestre($semestre){
        $this->$semestre = $semestre;
        return $this; 
    }
    public function setIdUsuario($idUsuario){
        $this->$idUsuario = $idUsuario;
        return $this; 
    }

}
?>