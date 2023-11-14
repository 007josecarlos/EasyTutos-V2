<?php
class Usuario{
    public $idUsuario;
    public $nombreUsuario;
    public $contraseña;
    public $nombre;
    public $apellido;
    public $telefono;
    public $idTipoUsuario;


    public function __construct($idUsuario, $nombreUsuario, $contraseña, $nombre, $apellido, $telefono, $idTipoUsuario)
    {
        $this->idUsuario = $idUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseña = $contraseña;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->idTipoUsuario = $idTipoUsuario;

        
    }

    // Métodos GET
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuario;
    } 
    
        public function getContraseña(){
        return $this->contraseña;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    
    public function getIdTipoUsuario(){
        return $this->idTipoUsuario;
    }

    

    //Metodos Set

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this; 
    }

    public function setNombreUsuario($nombreUsuario){
        $this->$nombreUsuario = $nombreUsuario;
        return $this; 
    }

    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
        return $this; 
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this; 
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
        return $this; 
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
        return $this; 
    }

    public function setIdTipoUsuario($idTipoUsuario){
        $this->idTipoUsuario = $idTipoUsuario;
        return $this; 
    }



}

?>