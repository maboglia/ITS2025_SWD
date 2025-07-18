<?php

class Pokemon{

    private $id;
    private $nome;
    private $tipo1;
    private $tipo2;
    private $generation;
    private $leggendario;

    public function __get($name){

        return $this->$name;

    }

    public function __set($name,$value){

        $this->$name=$value;

    }
    
    public function getImage() {

        return "https://img.pokemondb.net/sprites/home/normal/2x/".$this->nome.".jpg";

    }

}