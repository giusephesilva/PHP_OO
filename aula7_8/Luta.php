<?php
require_once "Lutador.php";
class Luta{
    private Lutador $desafiado; //No PHP não é necessário colocar o tipo na agregação (tipo abstrato), porém coloquei para facilitar o entendimento 
    private Lutador $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta($l1,$l2){
        if (($l1->getCategoria() == $l2->getCategoria()) && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }

    }

    public function lutar(){
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);//gera um número aleatório entre 0 e 2

            switch ($vencedor) {
                case 0:
                    echo "Empatou";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    echo "</br>";
                    break;
                case 1:
                    echo "O Desafiado ganhou: ".$this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                    echo "</br>";
                case 2:
                    echo "O Desafiante ganhou: ".$this->desafiante->getNome();
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                    echo "</br>";
            }
        }else{
            echo "A luta não pode acontecer";
        }
    }

}



?>