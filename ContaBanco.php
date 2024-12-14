<?php 

// tipo conta: cc / cp
// atributos: + numConta, # tipo, - dono, - saldo, - status
// metodos: depositar, sacar, transferir, consultarSaldo, consultarTipoConta

// + abrirConta() = cc recebe 150 e cp recebe 50
// + fecharConta() = só pode fechar contas com saldo 0
// + depositar() = conta aberta
// + sacar() = conta aberta e saldo na conta
// + pagarMensal() = cp paga R$12 e cc paga 20

// get e seter de todos os atributos

// método construtor conta começa zerada e status falso (fechada)


class ContaBanco {
    public int $numConta;
    protected string $tipo;
    private string $dono;
    private float  $saldo;
    private bool $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus( false); 

    }

    public function abrirConta($t){
        $this->setTipoConta($t);
        $this->setStatus(true);
        if($t == 'CC'){
            $this->setSaldo(50);
        }
        elseif($t == 'CP'){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this->getSaldo() == 0 && $this->getStatus()){
            $this->setStatus(false);
        }
    }
 
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        }else{
            echo "Conta fechada";
        }
    }

    public function sacar($v){
        if($this->getStatus() && $this->getSaldo() >= $v){
            $this->setSaldo($this->getSaldo()-$v);
        }else{
            echo "Conta fechada ou saldo insuficiente";
        }
    }

    public function pagarMensal(){

        if($this->getStatus()){
            if($this->getTipoConta()=='CC'){

                if($this->getSaldo()>=12){
                    $this->setSaldo($this->getSaldo()-12);
                }else{
                    echo "Saldo insuficiente";
                }

            }elseif($this->getTipoConta()=='CP'){

                if($this->getSaldo()>=20){
                    $this->setSaldo($this->getSaldo()-20);
                }else{
                    echo "Saldo insuficiente";
                }

            }
        }else{
            echo "Conta fechada";
        }
    }





    public function getNumConta(){
        return $this->numConta;

    }

    public function setNumConta($n):int{
        return $this->numConta = $n;
    }

    protected function getTipoConta(){
        return $this->tipo;
    }

    protected function setTipoConta($t):string{
        return $this->tipo = $t;
    }

    private function getDono(){
        return $this->dono;
    }

    private function setDono($d):string{
        return $this->dono = $d;
    }

    private function getSaldo(){
        return $this->saldo;
    }

    private function setSaldo($s):float{
        return $this->saldo = $s;
    }

    private function getStatus(){
        return $this->status;
    }

    private function  setStatus($t):bool{
        return $this->status = $t;
    }







}



?>