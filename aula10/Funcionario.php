<?php
require_once "Pessoas.php";
class Funcionario extends Pessoas{
    private $setor;
    private $trabalhando;
    
    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->setTrabalhando(!$this->getTrabalhando());
    }
}



?>