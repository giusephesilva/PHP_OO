<?php
require_once "Animal.php";
class Ave extends Animal{
    private $corPena;

    public function locomover(){
        echo "Voando </br>";
    }
    public  function alimentar(){
        echo "Comendo Frutas </br>";
    }
    public function emitirSom(){
        echo "Som de Ave </br>";
    }

    public function fazerNinho(){
        echo "Contruiu um ninho </br>";
    }

    //GET e SET

    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }
}



?>