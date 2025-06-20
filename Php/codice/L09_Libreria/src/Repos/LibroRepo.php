<?php

namespace App\Repos;

use App\Model\Libro;

class LibroRepo {

    private $DB;

    public function __construct(){
        $this->DB = new \PDO("mysql:host=localhost;dbname=libreria;", "ITS_2025", "ITS_2025");
    }

    public function getLibri(){

        //fare query al db
        $query = "SELECT * FROM libro";
        $results = $this->DB->query($query);
        //recuperare risultati
        $results->setFetchMode(\PDO::FETCH_CLASS, Libro::class);
        // $results->setFetchMode(\PDO::FETCH_OBJ);
        //scorrer risultat::
        // $libri = [];
        // while($record_libro = $results->fetch()){
        //     //array_push($libri, $record_libro);

        //     $libri[] = $record_libro;
        // }
        // //per ogni record creare un oggetto Libro
        // //mettere ogn oggetto Libro in una lista di Libro
        // //ritornare la lista piena di libri
        // return $libri;
        
        //strada breve
       return $results->fetchAll();

    }




}