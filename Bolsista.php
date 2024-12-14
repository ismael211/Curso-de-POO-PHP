<?php

require_once 'Aluno.php';

#filha de Aluno / subclasse de Aluno

class Bolsista extends Aluno {
    private $bolsa;
    
    public function RenovarBolsa(){
        echo "Bolsa renovada!<br>";
    }

    public function pagarMensalidade(){
        echo 'Bolsista paga com desconto!<br>';
    }







    public function getBolsa() {
        return $this->bolsa;
    }
    
    public function setBolsa($b) {
        return $this->bolsa = $b;
    }


}