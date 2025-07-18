<?php

class Prodotto {

    private $nome;  //public oppure private pero metti get e set
    private $prezzo;


    public function __construct($nome, $prezzo){ //new Prodotto('nome');
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function __get($name){ //magic method, un get per tutti e non un get per ognuno
        return $this->$name;
    }

    public function __set($name, $value){ //magic method, un set per tutti e non un set per ognuno
        $this->$name = $value;
    }

    public function __toString(){
        return $this->nome . ': ' . $this->prezzo;
    }
}

///index.php?nomeProdotto=pizza&prezzoProdotto=10
?>