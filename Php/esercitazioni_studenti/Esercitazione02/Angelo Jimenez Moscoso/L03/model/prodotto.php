<?php

class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct($nome, $prezzo){//new Prodotto('Iphone');
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function __get($nome){
        return $this->$nome;
    }

    public function __set($nome, $value){
        $this->$nome = $value;
    }

    public function __tostring(){
        return $this->nome . ':' . $this-> prezzo;
    }
}




