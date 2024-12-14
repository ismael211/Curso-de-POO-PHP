<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    

    public function __construct($m, $c, $p) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);      
        $this->tampar();
    }



    public function rabiscar(){

        if($this->tampada){
            echo "Não posso rabiscar, a caneta está tampada.";

        }else{
            echo  "<p>Rabiscando...</p>";
        }

    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){

        $this->modelo = $m;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($c){
        $this->cor =$c;
    }


    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }


    public function tampar(){
        $this->tampada=true;
    }

    public function destampar(){
        $this->tampada=false;
    }


}