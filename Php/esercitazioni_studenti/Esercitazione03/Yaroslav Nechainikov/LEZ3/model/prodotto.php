<?php

class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct($nome,$prezzo){
        $this->nome=$nome;
        $this->prezzo=$prezzo;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name=$value;
    }

    public function __tostring(){
        return $this->nome. ': ' . $this->prezzo;
    }
}