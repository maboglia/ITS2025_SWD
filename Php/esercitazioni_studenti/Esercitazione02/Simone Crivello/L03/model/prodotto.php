<?php

class prodotto {
    
    public $nome;
    public $prezzo;

    public function __construct($nome,$prezzo) {// new Prodotto("samsung");
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
    
    public function __get($nome) {//magic methods
        return $this->nome;
    }

    public function __set($nome,$prezzo) {
        $this->$nome = $prezzo;
    }

    public function __toString() {
        return $this->nome . ": " . $this->prezzo;
    }
}    
