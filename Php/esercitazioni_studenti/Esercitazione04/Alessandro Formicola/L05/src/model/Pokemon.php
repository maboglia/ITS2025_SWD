<?php
class Pokemon {
    
    private $id;
    private $name;
    private $type1;
    private $type2;
    private $Generation;
    private $Legendary;

    public function __get($name) {
        return $this-> $name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function getImmage() {
        return "https://img.pokemondb.net/sprites/home/normal/2x/".strtolower($this->name).".jpg";
    }
}