
<?php
    require "../src/model/Pokemon.php";
    require "../src/repo/Connessione.php";
    class PokemonDAO {
        private $conn;

        function __construct() {

            $connessione=new Connessione();
            $this->conn=$connessione->getConnessione();
            
        }

        public function getAllPokemon() {

            $allPokemon=[];

            $query="select * from pokemon";

            $results = $this->conn->query($query);

            while ($riga= $results->fetch(PDO::FETCH_ASSOC)) {

                $pokemon = new Pokemon();

                $pokemon->id=$riga["Id"];
                $pokemon->nome=$riga["Name"];
                $pokemon->tipo1=$riga["Type 1"];
                $pokemon->tipo2=$riga["Type 2"];
                $pokemon->generazione=$riga["Generation"];
                $pokemon->leggendario=$riga["Legendary"];

                $allPokemon[]=$pokemon;          // corrisponde a array_push($allPokemon,$pokemon) metodo più lungo
            }


            return $allPokemon;
        }


    }