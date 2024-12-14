<?php 

require_once "Pessoa.php";


class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;


    public function mudarTrabalho($nt){
        $this->setSetor($nt);
        echo "O funcionário foi transferido para o setor $nt.";

    }


    public function getSetor() {
        return $this->setor;
    }
    
    public function setSetor($s) {
        return $this->setor = $s;
    }


    public function getTrabalhando() {
        return $this->trabalhando;
    }
    
    public function setTrabalhando($trabalhando) {
        return $this->trabalhando = $trabalhando;
    }





}