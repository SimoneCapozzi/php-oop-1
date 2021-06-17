<?php

  class Movie{

    //variabili d'istanza

    public $titolo;
    public $anno;
    public $durata;
    public $regia;
    public $genere;
    private $attori;
    static $films = 0;

    //costruttore -------------------------------------------
    public function __construct($_titolo, $_regia){
      $this->titolo = $_titolo;
      $this->regia = $_regia;
      //incremento contatore quando viene invocato il costruttore
      self::$films++;

    }

    //metodi -------------------------------------------
    public function getInfo(){
      return "prodotto l'anno: ".$this->anno. ", della durata di: ".$this->durata;
    }
    
    public function setGenere($_genere){
      $this->genere = $_genere;
      
    }

    public function getGenere(){
      return $this->genere;
    }

    //metodo privato --------------------------------------
    public function setAttori($_attori){
      $this->attori = $_attori;
    }

    public function getAttori(){
      return $this->attori;
    }

    // funzione statica si incrementa quando creo una nuova istanza (aggiungo un film)
    static function getFilms(){
      return self::$films;
    }

  
  }


?>