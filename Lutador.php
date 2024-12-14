<?php 

class Lutador{
    public string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $peso;
    private float $altura;
    public string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    public  function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){

        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);

    }

    public function apresentar(){
        echo "<p>Apresentando o lutador: {$this->getNome()}</p>";
        echo "<p>Origem: {$this->getNacionalidade()}</p>";
        echo "<p>Idade: {$this->getIdade()} Anos</p>";
        echo "<p>Peso: {$this->getPeso()} kg</p>";
        echo "<p>Altura: {$this->getAltura()} m</p>";
        echo "<p>Categoria: {$this->getCategoria()}</p>";
        echo "<p>Venceu: {$this->getVitorias()}</p>";
        echo "<p>Perdeu: {$this->getDerrotas()}</p>";
        echo "<p>Empatou: {$this->getEmpates()}</p>";
        echo "<br>#######################################<br>";
    }
    
    public function status(){
        echo  "<p>Nome: {$this->getNome()}</p>";
        echo "<p>é da categoria: {$this->getCategoria()}</p>";
        echo  "<p>Tem {$this->getVitorias()} vitórias</p>";
        echo "<p>Tem {$this->getDerrotas()} derrotas</p>";
        echo "<p>Tem {$this->getEmpates()} empates</p>";

    }

    public  function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }

    public   function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);

    }
    public   function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }


    public function getNome() {
        return $this->nome;
    }
    
    private function setNome($n) {
        return $this->nome = $n;
    }
    
    private function getNacionalidade() {
        return $this->nacionalidade;
    }
    
    private function setNacionalidade($n) {
        return $this->nacionalidade = $n;
    }

    private function getIdade() {
        return $this->idade;
    }
    
    private function setIdade($age) {
        return $this->idade = $age;
    }

    private function getPeso() {
        return $this->peso;
    }
    
    private function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
        return;
    }

    private function getAltura() {
        return $this->altura;
    }
    
    private function setAltura($al) {
        return $this->altura = $al;
    }

    public function getCategoria() {
        return $this->categoria;
    }
    
    private function setCategoria() {

        if($this->getPeso() < 52.2){
            return $this->categoria = "Inválido";
        }elseif($this->getPeso() < 70.3){
            return $this->categoria = "Leve";
        }elseif($this->getPeso() < 83.9){
            return $this->categoria = "Médio";
        }elseif($this->getPeso() < 120.2){
            return $this->categoria = "Pesado";
        }else{
            return $this->categoria = "Inválido";
        }
    }

    private function getVitorias() {
        return $this->vitorias;
    }
    
    private function setVitorias($v) {
        return $this->vitorias = $v;
    }

    private function getDerrotas() {
        return $this->derrotas;
    }
    
    private function setDerrotas($d) {
        return $this->derrotas = $d;
    }

    private function getEmpates() {
        return $this->empates;
    }
    
    private function setEmpates($e) {
        return $this->empates = $e;
    }

}