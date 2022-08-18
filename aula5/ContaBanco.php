<?php

class ContaBanco {
    public $numConta;
    protected $tipo; //só vai aceitar "cc" (conta corrente) e "cp" (Conta poupança)
    private $dono;
    private $saldo;
    private $status;

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($n){
        $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($sa){
        $this->saldo = $sa;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($st){
        $this->status = $st;
    }

    public function abrirConta($t){
        $this->setStatus(true);
        $this->setTipo($t);

        if ($t == "cc") {
            $this->setSaldo(50);
        }elseif ($t == "cp") { 
            $this->setSaldo(150);
        }
        
    }

    public function fecharConta(){ 
        $total = $this->getSaldo();
        if ($total > 0) {            
           echo "Conta com dinheiro, não pode ser fechada";
        }elseif ($total<0) {
            "Conta em débito, não pode ser fechada";
        }else{
            $this->setStatus(false);
        }                     
    }

    public function depositar($valor){
        $stat = $this->getStatus();
        if ($stat == true) {
            $total = $this->getSaldo();
            $this->setSaldo($total+$valor);
        }else {
            echo "Não é possivel depositar";
        }
    }

    public function sacar($valor){
        $stat = $this->getStatus();
        $total = $this->getSaldo();
        if ($stat == true) {
            if ($total >= $valor) {
                $this->setSaldo($total-$valor);
            } else {
                echo "Saldo Insuficiente";
            }     
        }else {
            echo "Impossivel sacar, conta fechada";
        }
    }

    public function pagarMensal(){
        $t = $this->getTipo();
        $total = $this->getSaldo();
        $stat = $this->getStatus();
        $v = 0;
        if ($t == "cc") {    
            $v = 12;       
        }elseif ($t == "cp") {
            $v = 20;
        }
        if ($stat == true) {
            if ($total >= $v) {
                $this->setSaldo($total-$v);
            }else {
               echo "Saldo Insuficiente";
            }       
       
        }else {
            echo "Impossivel Pagar";
        }
        
    }

    public function __construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
    }

}

?>