<?php

require "../src/service/PokemonService.php";

class PokemonMVC {

    private $service;

    public function __construct() {
        $this->service = new PokemonService();
    }

    public function getPokemon() {
        
        include VIEW."header.php";
        
        $allPokemon = $this->service->getPokemon();

        include VIEW."table.php";
        include VIEW."footer.php";

    }
}




