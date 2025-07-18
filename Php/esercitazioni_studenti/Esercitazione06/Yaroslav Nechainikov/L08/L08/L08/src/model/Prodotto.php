<?php

//package
namespace app\model;

class Prodotto{

    private $id;

    private $nome;
    private $categoria;
    private $origine;
    private $prezzoIvato;
    private $disponibilità;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function prezzoIvato(){
        return $this->prezzoKg * 1.22; //applicazione IVA al 22%
    }
}