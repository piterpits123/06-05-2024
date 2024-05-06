<?php

class Carros {
    public $modelo;
    public $marcas;

    function __construct($modelo, $marcas){
        $this->modelo = $modelo;
        $this->marcas = $marcas;
    }

    function get_modelo(){
        return $this->marcas;
    }

    function get_marcas(){
        return $this-> modelo;
    }
}

$kwid = new Carros("kwid", "renault");

echo "o modelo do carro é: " . $kwid-> get_modelo();

echo "<br/>";

echo "a marca do carro é: " . $kwid-> get_marcas();

?>