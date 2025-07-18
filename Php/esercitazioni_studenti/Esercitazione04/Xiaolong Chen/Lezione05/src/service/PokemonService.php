<?php
require "../src/repo/PokemonDAO.php";
class PokemonService{
    private $DAO;
    function __construct()
    {
        $this->DAO = new PokemonDao();

    }
    public function getPokemon(){
        return $this->DAO->getAllPokemon();
    }
}