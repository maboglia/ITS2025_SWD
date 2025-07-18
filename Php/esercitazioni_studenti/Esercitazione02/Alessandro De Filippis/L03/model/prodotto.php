<?php


class Prodotto{

    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo){
        $this->prezzo = $prezzo;
        $this->nome = $nome;
    }

    public function get($name){
        return $this->nome;
    }

    public function __toString(){
        return $this->nome . " : " . $this->prezzo;
    }

    public function __set($nome, $valore){
        $this->$nome =$valore;
    }



}