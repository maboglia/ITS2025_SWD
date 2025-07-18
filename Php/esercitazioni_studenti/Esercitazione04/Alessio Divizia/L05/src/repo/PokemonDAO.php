<?php

require "../src/repo/Connection.php";
require "../src/model/Pokemon.php";

class PokemonDAO {

    private $conn;

    function __construct()
    {
        $connection = new Connection();

        $this->conn = $connection->getConnection();
    }

    public function getAllPokemon() {

        $allPokemon = [];

        $query="SELECT * FROM pokemon";

        $results = $this->conn->query($query);

        while ($line = $results->fetch(PDO::FETCH_ASSOC)) {
            $pokemon = new Pokemon();

            $pokemon->id = $line['Id'];
            $pokemon->nome = $line['Name'];
            $pokemon->tipo1 = $line['Type 1'];
            $pokemon->tipo2 = $line['Type 2'];
            $pokemon->generazione = $line['Generation'];
            $pokemon->leggendario = $line['Legendary'];

            $allPokemon[] = $pokemon; //corrisponde ad "array_push($allPokemon, $pokemon)"
            
        }

        return $allPokemon;

    }

}