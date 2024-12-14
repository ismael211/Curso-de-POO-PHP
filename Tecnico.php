<?php 

require_once 'Aluno.php';

class Tecnico extends Aluno{

    private $regProf;

    public function praticar(){
        echo "Praticando...";
    }


    public function getRegProf() {
        return $this->regProf;
    }
    
    public function setRegProf($regProf) {
        return $this->regProf = $regProf;
    }




}
