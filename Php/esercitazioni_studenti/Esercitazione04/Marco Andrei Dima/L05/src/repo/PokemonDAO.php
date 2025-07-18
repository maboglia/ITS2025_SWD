<?php

require "../src/repo/Connessione.php";
require "../src/model/Pokemon.php";

    class PokemonDAO {

        private $conn;

        function __construct() {

            $connessione=  new Connessione();

            $this->conn=$connessione->getConnessione();

        }

        public function getAllPokemon() {

            $allPokemon= [];
            
            $query="SELECT * FROM pokemon";


            $result=$this->conn->query($query);

            while ($riga = $result->fetch(PDO::FETCH_ASSOC)) {
                $pokemon= new Pokemon();
                $pokemon->id=$riga['Id'];
                $pokemon->nome=$riga['Name'];
                $pokemon->tipo1=$riga['Type 1'];
                $pokemon->tipo2=$riga['Type 2'];
                $pokemon->generazione=$riga['Generation'];
                $pokemon->leggendario=$riga['Legendary'];

                $allPokemon[]=$pokemon;    //corrisponde a arrar_push($allPokemon, $pokemon);


                // array_push($allPokemon, $pokemon);
            }
            
            return $allPokemon;

        }

    }