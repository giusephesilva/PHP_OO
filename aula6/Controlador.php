<?php

interface Controlador{
    //Por padrão os métodos de uma interface são abstratos, porém no PHP o mesmo já é definido por padrão assim que é digitado, então não precisa colocar a palavra "abstract"
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

}



?>