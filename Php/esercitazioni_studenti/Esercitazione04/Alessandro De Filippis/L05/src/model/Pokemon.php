<?php

class Pokemon{

    private $id;
    private $nome;
    private $tipo1;
    private $tipo2;
    private $generation;
    private $Leggendario;


    public function __get($nome){
        
        return $this->$nome;
    }

    public function __set($nome,$valore){
        
        $this->$nome = $value;
    }

    public function getImage(){
        return "https://img.pokemondb.net/sprites/home/normal/2x/".$this->nome.".jpg";  
    }






    
}











