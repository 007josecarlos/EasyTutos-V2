<?php 
class Monitoria{
    public $idMonitoria;
    public $idMonitor;
    public $idMateria;
    public $idTema;
    public $horaDia;
    public $idUbicacion;

    public function __construct($idMonitoria, $idMonitor, $idMateria, $idTema, $horaDia, $idUbicacion){
        $this->$idMonitoria = $idMonitoria;
        $this->idMonitor = $idMonitor;
        $this->idMateria = $idMateria;
        $this->idTema = $idTema;
        $this->horaDia = $horaDia;
        $this->idUbicacion = $idUbicacion;
    }

    // Métodos GET
    public function getIdMonitoria(){
        return $this->idMonitoria;
    }

    public function getIdMonitor(){
        return $this->idMonitor;
    } 
    
        public function getIdMateria(){
        return $this->idMateria;
    }

    public function getIdTema(){
        return $this->idTema;
    }

    public function getHoraDia(){
        return $this->horaDia;
    }

    public function getIdUbicacion(){
        return $this->idUbicacion;
    }

    //Metodos Set
    public function setIdMonitoria($idMonitoria){
        $this->idMonitoria = $idMonitoria;
        return $this; 
    }

    public function setIdMonitor($idMonitor){
        $this->$idMonitor = $idMonitor;
        return $this; 
    }

    public function setIdMateria($idMateria){
        $this->idMateria = $idMateria;
        return $this; 
    }

    public function setIdTema($idTema){
        $this->idTema = $idTema;
        return $this; 
    }

    public function setHoraDia($horaDia){
        $this->horaDia = $horaDia;
        return $this; 
    }

    public function setIdUbicacion($idUbicacion){
        $this->idUbicacion = $idUbicacion;
        return $this; 
    }

}
?>