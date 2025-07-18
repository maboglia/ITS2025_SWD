<?php

    require "../src/repo/PokemonDAO.php";

    class PokemonService {

        private $DAO;

        public function __construct() {
            $this->DAO = new PokemonDAO();
        }

        public function getPokemons() {
            return $this->DAO->all();
        }
    }
?>