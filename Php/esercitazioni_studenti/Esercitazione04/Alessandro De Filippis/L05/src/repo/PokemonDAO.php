<?php

    require "../src/repo/connessione.php";
    require "../src/model/Pokemon.php";

    class PokemonDAO{

        private $connessione;

        function __construct(){
            $connessione = new Connessione();

            $this->connessione = $connessione->getConnessione();

        }

        public function getAllPokemon(){
            $allPokemon=[];

            $query = "SELECT * FROM pokemon";

            $results = $this->connessione->query($query);

            while($row = $results->fetch(PDO::FETCH_ASSOC)){

                $pokemon = new Pokemon();
                $pokemon->id=$row['id'];
                $pokemon->name=$row['name'];
                $pokemon->tipo1=$row['tipo1'];
                $pokemon->tipo2=$row['tipo2'];
                $pokemon->generation=$row['generation'];
                $pokemon->leggendario=$row['leggendario'];

                $allPokemon[] = $pokemon;
            }

            return $allPokemon;
        }

    }