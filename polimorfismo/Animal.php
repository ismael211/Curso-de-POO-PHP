<?php 

abstract class Animal{
   protected $peso;
   protected $idade;
   protected $membros;

   abstract function locomover();
   abstract function alimentar();
   abstract function emitirSom();

    public function getPeso() {
        return $this->peso;
    }
    
    public function setPeso($p) {
        return $this->peso = $p;
    }

    public function getIdade() {
        return $this->idade;
    }
    
    public function setIdade($i) {
        return $this->idade = $i;
    }

    public function getMembros() {
        return $this->membros;
    }
    
    public function setMembros($m) {
        return $this->membros = $m;
    }


}