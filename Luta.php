<?php

require_once 'Lutador.php';

class Luta {

    private Lutador $desafiado;
    private Lutador $desafiante;
    private $rounds;
    private $aprovada;
    private $vencedor;


    public function marcarLuta($l1, $l2){

        if($l1->getCategoria() === $l2->getCategoria() 
            && $l1 != $l2){

            echo 'Luta aprovada!';

            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);

        }else{

            echo 'Luta NÃO aprovada!';

            $this->setAprovada(false);
            // $this->setDesafiado(null);
            // $this->setDesafiante(null);
        }
    }

    public function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();

            $vencedor = rand(0,2);

            echo '<br><br><b>THIIIIIIIIS TIIIIIIME!!!!</b><br><br>';

            if($vencedor==1){
                echo $this->getDesafiado()->getNome() . ' ganhou a luta!';
                $this->getDesafiado()->ganharLuta();
                $this->getDesafiante()->perderLuta();
                $this->setVencedor($this->getDesafiado());

            }elseif($vencedor==2){
                echo $this->getDesafiante()->getNome() . ' ganhou a luta!';
                $this->getDesafiado()->perderLuta();
                $this->getDesafiante()->ganharLuta();
                $this->setVencedor($this->getDesafiante());

            }else{
                echo 'A luta empatou!';
                $this->getDesafiado()->empatarLuta();
                $this->getDesafiante()->empatarLuta();
            }

            echo '<br><br>'.$this->getDesafiado()->status();
            echo '<br><br>'.$this->getDesafiante()->status();


        }else{
            echo "<p>Luta não aprovada!</p>";
        }
    }




    public function getDesafiado() {
        return $this->desafiado;
    }
    
    public function setDesafiado($dd) {
        return $this->desafiado = $dd;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }
    
    public function setDesafiante($dt) {
        return $this->desafiante = $dt;
    }

    public function getRounds() {
        return $this->rounds;
    }
    
    public function setRounds($r) {
        return $this->rounds = $r;
    }

    public function getAprovada() {
        return $this->aprovada;
    }
    
    public function setAprovada($ap) {
        return $this->aprovada = $ap;
    }

    public function getVencedor() {
        return $this->vencedor;
    }
    
    public function setVencedor($v) {
        return $this->vencedor = $v;
    }

}