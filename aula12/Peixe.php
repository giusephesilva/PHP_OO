<?php
require_once "Animal.php";
class Peixe extends Animal{
    private $corEscama;

    public function soltarBolha(){
        echo "Soltou uma bolha </br>";
    }

    public function locomover(){
        echo "Nadando </br>";
    }
    public  function alimentar(){
        echo "Comendo Substâncias </br>";
    }
    public function emitirSom(){
        echo "Peixe não faz som </br>";
    }

    //GET e SET

    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }
}



?>