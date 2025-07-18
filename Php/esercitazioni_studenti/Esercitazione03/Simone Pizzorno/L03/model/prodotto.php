<?php

//creazione classe Prodotto
class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct($nome, $prezzo) {  //new Prodotto("Iphone") (metodo costruttore)
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    } 

    //ritorna nome
    public function __get($nome): mixed{
        return $this->$nome;
    }

    //setta il valore
    public function __set($nome, $valore): void{
        $this->$nome = $valore;
    }

    //ritorna la stringa nome-prezzo
    public function __toString(): string{
        return  $this->nome .':'. $this->prezzo;
    }
}

