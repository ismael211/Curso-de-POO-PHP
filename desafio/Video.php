<?php 

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function play(){
        $this->setReproduzindo(true);
        echo '<p>Reproduzindo...</p>';
    }

    public function pause(){
        $this->setReproduzindo(false);
        echo '<p>Pausado...</p>';
    }

    public function like(){
        $likes = $this->getCurtidas();
        $this->setCurtidas($likes+1);
        echo '<p>Video marcado com gostei!</p>';
    }

    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        return $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }
    
    public function setAvaliacao($avaliacao) {
        return $this->avaliacao = $avaliacao;
    }

    public function getViews() {
        return $this->views;
    }
    
    public function setViews($views) {
        return $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }
    
    public function setCurtidas($curtidas) {
        return $this->curtidas = $curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    
    public function setReproduzindo($reproduzindo) {
        return $this->reproduzindo = $reproduzindo;
    }


}