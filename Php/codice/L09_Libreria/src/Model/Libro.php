<?php

namespace App\Model;//corrisponde al package name in Java

class Libro {
    //incapsulamento: prop private e metodi pubblici
    private  $id;
    private  $titolo;
    private  $pagine;
    private  $prezzo;
    private  $editore_id;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

}




