<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == true) {//usa o this para verificar um atributo dentro de um método da própria classe
            echo "erro! Não é possivel rabiscar";
        }else {
            echo "Estou rabiscando";
        }
    }
    private function tampar(){
        $this->tampada=true;
    }
    public function destampar(){
        $this->tampada=false;
    }
}

?>