<?php

class Prodotto {

    private $nome;
    private $prezzo;


    public function __construct($nome, $prezzo){ // Example: new Prodotto('IPhone');
        $this -> nome = $nome;
        $this -> prezzo = $prezzo;
    }

    public function __get($name){ // This is an example of Magic Methods

        return $this->$name;
    }

    public function __set($name, $value){

        $this->$name = $value;
    }

    public function __toString(){

        return $this->nome. ': ' .$this->prezzo;
    }

}


?>