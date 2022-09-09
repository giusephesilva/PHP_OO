<?php
require_once "Gafanhoto.php";
require_once "Video.php";
class Visualizacao{
    //Agregação
    private $espectador; //atributo do tipo Gafanhoto
    private $filme; //atributo do tipo Filme

    public function __construct($espectador,$filme){
        $this->espectador = $espectador;
        $this->filme = $filme;        
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->filme->setViews($this->filme->getViews() + 1);
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porcentagem){
        $nova = 0;
        if ($porcentagem <= 20) {
            $nova = 3;
        }elseif ($porcentagem <= 50) {
            $nova = 5;
        }elseif ($porcentagem <= 90) {
            $nova = 8;
        }else{
            $nova = 10;
        }

        $this->filme->setAvaliacao($nova);
    }

    //GET e SET

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
    }

}


?>

