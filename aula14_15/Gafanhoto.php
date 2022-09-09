<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

    public function assistirMaisUm(){
        $this->totAssistido++;
    }

    public function __construct($nome,$idade,$sexo,$login){
        parent::__construct($nome,$idade,$sexo); // Neste caso o 'parent' serve para referenciar a Superclasse
        $this->login = $login;
        $this->totAssistido = 0;
    }

    //GET e SET

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }


}

?>