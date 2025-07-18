<?php

require "../src/repo/pokemonDAO.php";

    class PokemonService{
        private $DAO;
        
        function __construct(){
            $this->DAO = new pokemonDAO();
    }
    public function getPokemon(){
        return $this->DAO->getallPokemon();

    }
}