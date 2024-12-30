<?php

abstract class Carro{
    private $marca;
    private $modelo;
    private $color;
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        $this->marca;
    }
}


class Nissan extends Carro {
    // setMarca("Nissan");
    
}