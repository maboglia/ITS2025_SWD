<?php

//package
namespace app\Model;

class Prodotto
{
    //properties
    private $id;
    private $nome;
    private $categoria;
    private $origine;
    private $prezzoKg;
    private $disponibilita;

    public function __get($name){
        return $this->$name;
    }
}
    
        
    


