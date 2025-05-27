<?php

include  './repos/ProdottoRepo.php';

class ProdottoCtrl {

    private $repo;

    function __construct() {
        $this->repo = new ProdottoRepo;
    }

    public function home(){
        include  './view/header.php';
        //home page
        include  './view/footer.php';        
    }


    public function getProdotti(){

      $prodotti = $this->repo->getProdotti();

      include  './view/header.php';
      include  './view/tabella.php';
      include  './view/footer.php';

    }



}

