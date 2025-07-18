<?php
class Prodotto {
    private $nome;
    private $prezzo;

   public function __construct($nome,$prezzo) { // new Prodotto('Iphone');
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function __get($nome): mixed { // magic methods
        return $this->$nome;
     
    }

    public function __set($name, $value): void { // magic methods
        $this->$name = $value;
    }

    public function __toString(){
        return $this->nome . ' : ' . $this->prezzo;
    }

}