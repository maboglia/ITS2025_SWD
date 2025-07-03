<?php 

namespace App\Service;

use App\Repos\LibroRepo;
use App\Service\LibroService;

class LibroServiceImpl implements LibroService {

    private $repo;

    public function __construct(){
        $this->repo = new LibroRepo();
    }

    public function getLibri(){
        return $this->repo->getLibri();
    }

}