<?php

class Automobile{

    private $id;
    private $marca;
    private $modello;
    private $cilindrata;
    private $posti;
    private $prezzo;

    public function __get($name) {

        return $this->$name;

    }

    public function __set($name, $value){

        $this->$name = $value;

    }



}

