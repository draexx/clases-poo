<?php
// Your code here!
class Cuenta {
    /** Atributos **/
    private $numero;
    private $saldo;
    /** Metodos Getter and Setter **/
    public function getSaldo(){
        return $this->saldo;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    /** Metodos del objeto **/
    public function deposito($monto){
        $this->saldo = $this->saldo + $monto;
        //$this->saldo =+ $monto;
    }
    public function retiro($monto){
        $this->saldo = $this->saldo - $monto;
    }
    public function transaccion($monto,$tipo="DEPOSITO"){
        if ($tipo=="DEPOSITO"){
            $this->saldo = $this->saldo + $monto;
        }else{
            $this->saldo = $this->saldo - $monto;
        }
    }
    /** constructor **/
    public function __construct($numero=0,$saldo=0){
        $this->numero=$numero;
        $this->saldo=$saldo;
    }
}

//$cuentaPrincipal = new Cuenta(897);
//$cuentaPrincipal->setNumero(123456);
//$cuentaPrincipal->setSaldo(0);
/*$cuentaPrincipal->deposito(100);
$cuentaPrincipal->deposito(100);
$cuentaPrincipal->retiro(30);*/
$cuentaPrincipal = new Cuenta(987765,30);
$cuentaPrincipal->transaccion(100,"DEPOSITO");
$cuentaPrincipal->transaccion(100);
$cuentaPrincipal->transaccion(40,"RETIRO");
echo $cuentaPrincipal->getSaldo() . " Nro cuenta: " . $cuentaPrincipal->getNumero();
?>
