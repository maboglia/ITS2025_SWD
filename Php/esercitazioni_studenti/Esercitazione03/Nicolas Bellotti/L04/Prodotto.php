<?php

class Prodotto {

    private int $id;
    public string $nome;
    public float $prezzo;
    private string $categoria;
    private string $giacenza; 


    public function __construct() {
       

    }

    public function __get($nome) {
        return $this-> $nome;
    
    }

    public function __set($nome, $value) {
        $this->$nome = $value;

    }

}

?>