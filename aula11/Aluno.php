<?php
require_once "Pessoas.php";
class Aluno extends Pessoas{ //Caso queira que a classe 'Pessoa' não se torne superclasse de 'Bolsista' basta colocar 'final class Pessoas'
    private $matricula;
    private $curso;
    
    public function pagarMensalidade(){ //caso queira que o método não seja sobreposto pela classe 'Bolsista' basta colocar 'public final function pagarMensalidade()'
        echo "<p> Pagando Mensalidade do(a) aluno(a) ".$this->getNome()."</p>"; //poderia também utilizar '$this->nome' caso o atributo fosse definido como protegido na classe Pessoas
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }


}


?>