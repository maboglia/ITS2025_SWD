<?php

include  './repos/ProdottoRepo.php';

class ProdottoCtrl {

    private $repo;

    function __construct() {
        $this->repo = new ProdottoRepo;
    }

    public function home(){

        $prodotti = $this->repo->getProdotti();

        include  './view/header.php';
        include  './view/tabella.php';
        include  './view/footer.php';        
    }


    public function getProdotti($categoria){
   
      $prodotti = $this->repo->getProdottiByCategoria($categoria);

      include  './view/header.php';
      include  './view/tabella.php';
      include  './view/footer.php';

    }



}

