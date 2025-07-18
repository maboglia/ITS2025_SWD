<?php

    require "../src/service/PokemonaDAO.php";

    class PokemonService{

        private $DAO;

        function __construct(){
            $this->DAO = new PokemonDAO();

        }

        public function getAllPokemon()  {

            return $this->DAO->getAllPokemon();
            
        }
    }