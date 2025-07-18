<?php
require "../src/repo/PokemonDAO.php";

class Pokemon_service {
    private $DAO;

    function __construct() {
        $this->DAO = new PokemonDAO();
    }

    public function getAllPokemon() {
        return $this -> DAO -> getAllPokemon();
    }
}