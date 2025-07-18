<?php

//package
namespace app\model;

class Prodotto {

    private $id;

    private $home;

    private $categoria;

    private $origine;

    private $prezzo_kg;

    private $disponibilità;

    public function __get($name){

        return $this->$name;

    }

    public function __set($name, $value){

        $this->$name = $value;

    }

}

?>