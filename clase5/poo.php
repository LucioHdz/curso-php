<?php

class MiClase{
    private $nombre;
    private $correo;
    private $edad;


    public function __construct($nombre,$correo,$edad){
        // es el metodo constructor de la clase
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setNombre($nombre){
        return $this->nombre= $nombre;
    }
    public function setCorreo($correo){
        return $this->correo = $correo;
    }
    public function setEdad($edad){
        return $this->edad = $edad;
    }

}



$estanciaMiClase = new MiClase("LucioHdz","example@gmail.com",13);
// echo $estanciaMiClase->$nombre; es funcional pero no se puede por que es private
echo $estanciaMiClase->getNombre();
