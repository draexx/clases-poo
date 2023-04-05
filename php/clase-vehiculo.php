<?php
class Vehiculo {
    private $marca;
    private $color;
    private $propietario;
    private $modelo;
    private $lugarEstacionamiento;
    private $tipoEstacionamiento;
    /** get and set */
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getColor(){
        return $this->color;
    }
    public function getPropietario(){
        return $this->propietario;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function setPropietario($propietario){
        $this->propietario=$propietario;
    }
    public function __construct($marca,$modelo,$color,$propietario){
        $this->marca=$marca;
        $this->color=$color;
        $this->propietario=$propietario;
        $this->modelo=$modelo;
    }
}
class Autobus Extends Vehiculo{
    private $empresa;
    public function getEmpresa(){
        return $this->empresa;
    }
    public function setEmpresa($empresa){
        $this->empresa=$empresa;
    }
    public function __construct($modelo,$color,$marca,$propietario,$empresa){
        parent::__construct($modelo,$color,$marca,$propietario);
        $this->empresa=$empresa;
    }
    public function puedeAparcar
}

$autobus = new Autobus("sedan","blanco","nissan","Juan","tecba");
echo $autobus->getColor();
?>
