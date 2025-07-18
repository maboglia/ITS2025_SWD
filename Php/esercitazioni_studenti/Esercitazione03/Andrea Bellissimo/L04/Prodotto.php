<?php

class Prodotto{
    private int $id;
    public string $name;
    public float $prezzo;
    private int $giacenza;
    private string $categoria;

    public function __construct() {
        //echo "prodotto costruito";
    }

    public function get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }












}