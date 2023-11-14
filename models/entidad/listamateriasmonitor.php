<?php 
class ListaMateriasMonitor{
    public $idMonitor;
    public $idMateria;

    public function __construct($idMonitor, $idMateria){
        $this->idMonitor = $idMonitor;
        $this->idMateria = $idMateria;
        
    }

    // Métodos GET
    public function getIdMonitor(){
        return $this->idMonitor;
    }

    public function getIdMateria(){
        return $this->idMateria;
    }

    //Metodos Set
    public function setIdMonitor($idMonitor){
        $this->idMonitor = $idMonitor;
        return $this; 
    }
    public function setIdMateria($idMateria){
        $this->$idMateria = $idMateria;
        return $this; 
    }
}
?>