<?php
require_once "Publicacao.php";
require_once "Pessoa.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor; // não é necessário colocar o tipo pessoa, uma vez que o PHP já entende que é uma agregação. 

    public function __construct($titulo,$autor,$totPaginas,$leitor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);

    }

    //GET e SET
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }


    //Métodos
    public function detalhes(){
        echo "O nome do livro é ".$this->getTitulo().". Foi escrito por ".$this->getAutor().", possui ".$this->getTotPaginas()." páginas. </br>";
        echo "Leitor(a): ".$this->leitor->getNome()."</br>";

        if ($this->getAberto()) {
            echo "O livro está aberto. Página Atual: ".$this->getPagAtual()."</br>";
        }else {
            echo "O livro está fechado. Página Atual: ".$this->getPagAtual()."</br>";
        }       
    }

    public function abrir(){
        $this->setAberto(true);
    }

    public function fechar(){
        $this->setAberto(false);
    }

    public function folhear($pagina){
        if ($pagina > $this->getTotPaginas()) {
            $this->setPagAtual(0);
        }else {
            $this->setPagAtual($pagina);
        }
    }

    public function avancarPag(){
        if ($this->getPagAtual() < $this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() + 1);    
        }else {
            echo "Não é possivel avançar. Já está na ultima página </br>";
        }
        
    }

    public function voltarPag(){
        if ($this->getPagAtual() > 1) {
            $this->setPagAtual($this->getPagAtual() - 1);
        }else {
            echo "Não é possivel voltar. Já está na primeira página </br>";
        }
        
    }    

   
    
}


?>