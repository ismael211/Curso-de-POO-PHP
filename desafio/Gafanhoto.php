<?php 

require_once 'PessoaDesafio.php';

class Gafanhoto extends PessoaDesafio{
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {

        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;

    }

    public function viuMaisUm(){
        $this->totAssistido+1;
        echo 'Aula assistida.';
    }

    public function getLogin() {
        return $this->login;
    }
    
    public function setLogin($login) {
        return $this->login = $login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }
    
    public function setTotAssistido($totAssistido) {
        return $this->totAssistido = $totAssistido;
    }

}