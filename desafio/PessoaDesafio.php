<?php 

abstract class PessoaDesafio{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo) {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }


    protected function ganharExp(){
        $xp = $this->getExperiencia();
        $this->setExperiencia($xp+1);
        echo '<p>+1 XP</p>';
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        return $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }
    
    public function setIdade($idade) {
        return $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }
    
    public function setSexo($sexo) {
        return $this->sexo = $sexo;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }
    
    public function setExperiencia($experiencia):int {
        return $this->experiencia = $experiencia;
    }

}