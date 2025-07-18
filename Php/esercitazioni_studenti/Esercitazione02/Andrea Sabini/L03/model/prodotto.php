<?php

class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct($nome, $prezzo) {  //new Prodotto("Iphone")
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    } 

    public function __get($nome): mixed{
        return $this->$nome;
    }

    public function __set($nome, $valore): void{
        $this->$nome = $valore;
    }
    public function __toString(): string{
        return  $this->nome .':'. $this->prezzo;
    }
}

