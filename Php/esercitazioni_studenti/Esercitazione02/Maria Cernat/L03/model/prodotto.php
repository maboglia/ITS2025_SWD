<?php

class Prodotto {


    private $nome;

    private $prezzo;


    public function __construct($nome, $prezzo){ //new prodotto ('Samsung');
        $this ->nome = $nome;
        $this ->prezzo = $prezzo;

    }

    public function __get($name): mixed { //magic methods;
        return $this ->$name;

    }

    public function __set($name, $value): void{
        $this ->$name = $value;
    }

    public function __tostring(): string{
        return $this ->nome . ':' . $this->prezzo;
    }





}