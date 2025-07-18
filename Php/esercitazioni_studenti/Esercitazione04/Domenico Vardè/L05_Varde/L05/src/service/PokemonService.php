<?php

    require "../src/repo/PokemonDAO.php";

    class PokemonService{

        private $DAO;

        function __construct()
        {
           $this->DAO=new PokemonDAO(); 
        }

        public function getPokemon() {
            
            return $this->DAO->getAllPokemon();

        }

    }