<?php
    require "../src/repo/Connection.php";
    require "../src/model/Pokemon.php";

    class PokemonDAO {

        private $conn;

        public function __construct() {
            $conn = new Connection();
            $this->conn = $conn->getConnection();
        }

        public function all() {

            $pokemons = [];

            $query = "SELECT * FROM pokemon";
            $results = $this->conn->query($query);

            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {

                $pokemon = new Pokemon();

                $pokemon->id = $row["Id"];
                $pokemon->name = $row["Name"];
                $pokemon->type1 = $row["Type 1"];
                $pokemon->type2 = $row["Type 2"];
                $pokemon->generation = $row["Generation"];
                $pokemon->legendary = $row["Legendary"];

                $pokemons[] = $pokemon; // array_push($pokemons, $pokemon);
            }

            return $pokemons;
        }
    }

?>