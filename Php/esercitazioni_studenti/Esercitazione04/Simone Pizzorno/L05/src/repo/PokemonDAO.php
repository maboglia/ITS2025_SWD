<?php
    require "../src/repo/Connessione.php";
    require "../src/model/Pokemon.php";
    class PokemonDAO
    {

        private $conn;

        function __construct()
        {
            $connessione=new Connessione();
            $this->conn=$connessione->getConnessione();
        }

        public function getAllPokemon()
        {
            $allPokemon=[];
            $query="select * from pokemon";
            $results= $this->conn->query($query);

            while($riga=$results->fetch(PDO::FETCH_ASSOC))
            {
                $pokemon= new Pokemon();
                $pokemon->id=$riga["Id"];
                $pokemon->name=$riga["Name"];
                $pokemon->tipo1=$riga["Type 1"];
                $pokemon->tipo2=$riga["Type 2"];
                $pokemon->generation=$riga["Generation"];
                $pokemon->leggendario=$riga["Legendary"];

                $allPokemon[]=$pokemon;//corrisponde ad array_push($allPokemon,$pokemon)
            }

            return $allPokemon;

        }
    }