<?php
require "../src/repo/Connection.php";
require "../src/model/Pokemon.php";

class PokemonDAO {
    private $conn;

    function __construct() {
        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }

    public function getAllPokemon() {
        $allPokemon = [];
        $query = "SELECT * FROM pokemon";
        $results = $this -> conn -> query($query);
        while ($row = $results -> fetch(PDO::FETCH_ASSOC)) {
            $pokemon = new Pokemon();
            $pokemon -> id = $row["Id"];
            $pokemon -> name = $row["Name"];
            $pokemon -> type1 = $row["Type 1"];
            $pokemon -> type2 = $row["Type 2"];
            $pokemon -> Generation = $row["Generation"];
            $pokemon -> Legendary = $row["Legendary"];
            $allPokemon[] = $pokemon; // array_push($allPokemon, $pokemon); //stessa cosa
        }
        return $allPokemon;
    }

}