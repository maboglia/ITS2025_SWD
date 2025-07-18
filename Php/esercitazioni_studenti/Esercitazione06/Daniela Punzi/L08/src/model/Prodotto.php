<?php

//corrisponde in java a package
namespace  app\model;       //non deve per forza coincidere

class Prodotto{

    private $id;
    private $nome;
    private $categoria;
    private $origine;
    private $prezzo_kg;      // $this->prezzokg
    private $disponibilita;

    public function __get($name)
    {
        return $this->$name;        // $this è un modo per accedere agli oggetti
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function prezzoIvato(){  //per aggiungere l'iva del 22%
        return $this->prezzo_kg *1.22;
    }
}