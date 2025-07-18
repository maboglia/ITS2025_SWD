<?php

    require "../src/service/PokemonService.php";

    class PokemonMVC{
        
        private $service;

        public function __construct()
        {
            $this->service = new Pokemonservice();
        }

        public function getPokemon(){

            include VIEW."header.php";

            $allPokemon = $this->service->getPokemon();    //mi sono procurata tutti i pokeon e li ho messi nella tabella

            include VIEW."tabella.php";

            include VIEW."footer.php";

        }
    }