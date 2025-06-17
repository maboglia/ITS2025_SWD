<?php

namespace App\Model;//corrisponde al package name in Java

class Libro {
    //incapsulamento: prop private e metodi pubblici
    private int $id;
    private string $titolo;
    private int $pagine;
    private float $prezzo;
    private int $editore_id;

    public function __get($name): mixed{
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

}




