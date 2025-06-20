<?php

namespace App\Controller;

use App\Service\LibroServiceImpl;

class LibroMVC {

    private $service;

    public function __construct(){
        $this->service = new LibroServiceImpl();
    }

    public function index(){

       
        $libri = $this->service->getLibri();

        include './src/View/libri.php';


    }



}



