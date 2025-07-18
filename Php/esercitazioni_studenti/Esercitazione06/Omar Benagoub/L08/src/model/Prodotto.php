<?php

//package
namespace app\model;

class Prodotto
{
    public $id;
    public $nome;
    public $prezzo;
    public $quantita;

    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name = $value;
    } 
    public function prezzoIvato(){
        return $this->prezzo_kg * 1.22; // Aggiunge il 22% di IVA
    }
}