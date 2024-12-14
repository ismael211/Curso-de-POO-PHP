<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {

    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;


    public function __construct($titulo, $autor, $totpag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totpag;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }

    public function detalhes(){
        echo "<br><hr>Título: $this->titulo\n";
        echo "Autor(a): $this->autor\n";
        echo "Total de páginas: $this->totPaginas\n";
        echo "Página atual: $this->pagAtual\n";
        echo "Leitor(a): {$this->leitor->getNome()} \n";
        
    }

    public function abrir(){
        $this->aberto=true;
    }

    public function fechar(){
        $this->aberto=false;

    }

    public function folhear($p){
        if($p>$this->totPaginas){
            echo "Pagina não existe.";
        }else{
            $this->pagAtual=$p;
        }

    }

    public function avancarPag(){
        if($this->totPaginas>$this->pagAtual){
            $this->pagAtual ++;
        }else{
            echo "Você já está na ultima pagina.";
        }
    }

    public function voltarPag(){

        if($this->pagAtual != 0){
            $this->pagAtual --;
        }else{
            echo "Você está na primeira pagina.";
        }

    }

    private function getTitulo() {
        return $this->titulo;
    }
    
    private function setTitulo($t) {
        return $this->titulo = $t;
    }

    private function getAutor() {
        return $this->autor;
    }
    
    private function setAutor($a) {
        return $this->autor = $a;
    }

    private function getTotPaginas() {
        return $this->totPaginas;
    }
    
    private function setTotPaginas($tp) {
        return $this->totPaginas = $tp;
    }

    private function getPagAtual() {
        return $this->pagAtual;
    }
    
    private function setPagAtual($p) {
        return $this->pagAtual = $p;
    }

    private function getAberto() {
        return $this->aberto;
    }
    
    private function setAberto($a) {
        return $this->aberto = $a;
    }

    private function getLeitor() {
        return $this->leitor;
    }
    
    private function setLeitor($l) {
        return $this->leitor = $l;
    }

}


