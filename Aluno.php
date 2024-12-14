<?php 

require_once 'Pessoa.php';

class Aluno extends Pessoa{

    protected $matr;
    protected $curso;

    public function pagarMensalidade(){
        echo "Mensalidade paga!<br>";
    }


    public function cancelarMatr(){
        $this->setMatr(false);
    }

    public function getMatr() {
        return $this->matr;
    }
    
    public function setMatr($m) {
        return $this->matr = $m;
    }

    public function getCurso() {
        return $this->curso;
    }
    
    public function setCurso($c) {
        return $this->curso = $c;
    }



}