<?php

class Carro{

private $marca;
private $cor;
private $placa;
private $modelo;

public function __Construct($setmarca , $setcor, $setplaca, $setmodelo){

    $this->marca = $setmarca;
    $this->cor = $setcor;
    $this->placa = $setplaca;
    $this->modelo = $setmodelo;
}

public function imprimir(){
    return $this->marca . "<br/>" . $this->cor . "<br/>" . "Placa : " . $this->placa . "<br/>" . $this->modelo . "<br/>";
}

}

?>