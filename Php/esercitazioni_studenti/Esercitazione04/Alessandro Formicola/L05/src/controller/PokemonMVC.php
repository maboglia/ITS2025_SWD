<?php

require "../src/service/Pokemon_service.php";

class PokemonMVC {
    private $service;

    public function __construct() {
        $this->service = new Pokemon_service();
    }
    
    public function getPokemon() {
        include VIEW . 'header.php';
        
        $allPokemon = $this->service->getAllPokemon();
        include VIEW . 'table.php';
        include VIEW . 'footer.php';
    }
}