<?php

class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if ($this->tampada == true) {//usa o this para verificar um atributo dentro de um método da própria classe
            echo "erro! Não é possivel rabiscar";
        }else {
            echo "Estou rabiscando";
        }
    }
    function tampar(){
        $this->tampada=true;
    }
    function destampar(){
        $this->tampada=false;
    }
}

?>