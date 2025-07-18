<?php

    require "../src/repo/PokemonDAO.php";

    class PokemonService{

        private $DAO;
        function __construct() {
            $this->DAO = new PokemonDAO(); //creo un oggetto di tipo pokemonDAO
        }
        public function getAllPokemon() {
            return $this->DAO->getAllPokemon(); //richiamo il metodo getAllPokemon della classe pokemonDAO
        }
    }