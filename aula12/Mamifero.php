<?php
require_once "Animal.php";
class Mamifero extends Animal{
    private $corPelo;

    public function locomover(){
        echo "Correndo </br>";
    }
    public  function alimentar(){
        echo "Mamando </br>";
    }
    public function emitirSom(){
        echo "Som de Mamífero </br>";
    }

    //GET e SET 

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }
}


?>