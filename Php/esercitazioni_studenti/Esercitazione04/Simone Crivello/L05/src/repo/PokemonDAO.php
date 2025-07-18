<?php

    require "../src/repo/Connessione.php";
    require "../src/model/Pokemon.php";

    class PokemonDAO{

        private $conn;

        function __construct(){

            $connessione=new Connessione();
            $this->conn=$connessione->getConnessione();
        
        }

        public function getAllPokemons(){

            $allPokemon=[];
            $query="selects * from pokemon";
            $results= $this->conn->query($query);

            while($riga=$results->fetch(PDO::FETCH_ASSOC)){

                $pokemon=new Pokemon();
                $pokemon->id=$riga["Id"];
                $pokemon->nome=$riga["Name"];
                $pokemon->tipo=$riga["Type 1"];
                $pokemon->tipo2=$riga["Type 2"];
                $pokemon->generation=$riga["Generation"];
                $pokemon->legendario=$riga["Legendary"];
                $allPokemon[]=$pokemon;               
            }
            return $allPokemon;

        }

    }