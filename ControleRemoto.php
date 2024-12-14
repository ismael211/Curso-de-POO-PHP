<?php

require_once 'Controlador.php';


class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->setVolume(5);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function ligar(){
        $this->setLigado(true);

    }

    public function desligar(){
        $this->setLigado(false);

    }

    public function abrirMenu(){
        echo '<br>Está ligado?:  '.($this->getLigado()?'Sim':'Não').'<br>';
        echo 'Está tocando?:  '.($this->getTocando()?'Sim':'Não').'<br>';
        echo 'Volume:  '.$this->getVolume().'<br>';

        if($this->getVolume()!=0){
            for  ($i = 0; $i <= $this->getVolume(); $i++) {
                echo '|';
            }
        }
        echo "<br>";

        echo $this->getTocando();

    }

    public function fecharMenu(){
        echo "Menu fechado";
    }

    public function maisVolume(){
        if($this->getLigado()&& $this->getVolume()<10){
            $this->setVolume($this->getVolume()+1);
        }else{
            echo "Volume máximo atingido";

        }
            
    }

    public function menosVolume(){
        if($this->getLigado()){
            if($this->getVolume()>0){
                $this->setVolume($this->getVolume()-1);
            }else{
                $this->setVolume(0);
                echo 'O volume está em 0';
            }
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }


    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    private function setVolume($v){
        $this->volume = $v;
    }

    private function getVolume(){
        return $this->volume;
    }

    
    private function setLigado($l){
        $this->ligado = $l;
    }

    private function getLigado(){
        return $this->ligado;
    }

    
    private function setTocando($t){
        $this->tocando = $t;
    }

    private function getTocando(){
        return $this->tocando;
    }

    


}