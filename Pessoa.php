<?php 

abstract class Pessoa {

    protected $nome, $idade, $sexo;

    function  __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }


    public final function fazerAniver(){
        $this->idade ++;
    }

     function getNome() {
        return $this->nome;
    }
    
     function setNome($n) {
        return $this->nome = $n;
    }

     function getIdade() {
        return $this->idade;
    }
    
     function setIdade($i) {
        return $this->idade = $i;
    }

     function getSexo() {
        return $this->sexo;
    }
    
    function setSexo($s) {
        return $this->sexo = $s;
    }

}

?>