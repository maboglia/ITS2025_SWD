<?php

class Prodotto {

    private $nome;
    private $prezzo;
                // magic method quando iniziano per '__'
    public function __construct($nome, $prezzo) { //new Prodotto('iPhone);
        $this->nome = $nome; 
        $this->prezzo = $prezzo;
    }

    public function __get($name) {
        return $this->$name;

    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __tostring() {
        return $this->nome  . ' : ' . $this->prezzo;
    }


}