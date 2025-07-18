<?php

    require "../src/service/PokemonService.php";

    class PokemonMVC {

        private $service;

        public function __construct() {
            $this->service = new PokemonService();
        }

        public function getAllPokemons() {
            
            include VIEW . "header.php"; 

            $pokemons = $this->service->getPokemons();

            include VIEW . "table.php"; 
            include VIEW . "footer.php"; 
        }

    }

?>