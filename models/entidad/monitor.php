<?php 
class Monitor{
    public $idMonitor;
    public $calificacion;
    public $idUsuario;

    public function __construct($idMonitor, $calificacion, $idUsuario){
        $this->idMonitor = $idMonitor;
        $this->calificacion = $calificacion;
        $this->idUsuario = $idUsuario;
        
    }
    
    // Métodos GET
    public function getIdMonitor(){
        return $this->idMonitor;
    }

    public function getCalificacion(){
        return $this->calificacion;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    //Metodos Set
    public function setIdMonitor($idMonitor){
        $this->idMonitor = $idMonitor;
        return $this; 
    }
    public function setCalificacion($calificacion){
        $this->$calificacion = $calificacion;
        return $this; 
    }
    public function setIdUsuario($idUsuario){
        $this->$idUsuario = $idUsuario;
        return $this; 
    }

}
?>