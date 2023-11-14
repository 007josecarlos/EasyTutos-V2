<?php 
class Materia{
    public $idMateria;
    public $nombre;
    public $creditos;
    public $semestre;
    public $monitores;

    public function __construct($idMateria, $nombre, $creditos, $semestre, $monitores){
        $this->$idMateria = $idMateria;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
        $this->semestre = $semestre;
        $this->monitores = $monitores;
    }

    // Métodos GET
    public function getIdMateria(){
        return $this->idMateria;
    }

    public function getNombre(){
        return $this->nombre;
    } 
    
        public function getCreditos(){
        return $this->creditos;
    }

    public function getSemestre(){
        return $this->semestre;
    }

    public function getMonitores(){
        return $this->monitores;
    }

    //Metodos Set
    public function setIdMateria($idMateria){
        $this->idMateria = $idMateria;
        return $this; 
    }

    public function setNombre($nombre){
        $this->$nombre = $nombre;
        return $this; 
    }

    public function setCreditos($creditos){
        $this->creditos = $creditos;
        return $this; 
    }

    public function setSemestre($semestre){
        $this->semestre = $semestre;
        return $this; 
    }

    public function setMonitores($monitores){
        $this->monitores = $monitores;
        return $this; 
    }

}
?>