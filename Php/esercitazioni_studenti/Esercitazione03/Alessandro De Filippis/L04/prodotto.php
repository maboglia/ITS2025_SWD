<?php

class Prodotto{

    private int $id
    private string $nome;
    private float $prezzo;
    private int $giacenza;
    private string $categoria;

    public function __construct(){
        //echo "prodotto costruito";
    }

    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name = $value;
    }


}




















