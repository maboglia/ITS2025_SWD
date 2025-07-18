<?php
    require "../src/service/PokemonService.php";

    class PokemonMVC{
        private $service;
        
        function __construct(){
            $this->service = new PokemonService();
        }
        
        public function getPokemon(){
            include VIEW."header.php";
            $allPokemon = $this->service->getAllPokemon();

            include VIEW."tabella.php";

            include VIEW."footer.php";
        }
    }