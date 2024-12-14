<?php 

require_once 'Pessoa.php';

class Professor extends Pessoa {

    private $especialidade;
    private $salario;

    public function receberAum($ns){
        $this->setSalario($this->salario + $ns);
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }
    
    public function setEspecialidade($e) {
        return $this->especialidade = $e;
    }

    public function getSalario() {
        return $this->salario;
    }
    
    public function setSalario($s) {
        return $this->salario = $s;
    }


}