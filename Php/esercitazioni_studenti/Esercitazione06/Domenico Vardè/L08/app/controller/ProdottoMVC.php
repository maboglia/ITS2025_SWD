<?php
namespace app\controller;
use app\service\ProdottoService;

Class ProdottoMVC {

   private $service; 
    //in php va sempre inizializzato così
   public function __construct() {
       // Inizializzo il servizio dei prodotti
       $this->service = new ProdottoService();
   }
   public function index (){
    //chiedo al service i prodotti
    $prodotti = $this->service->getProdotti();
    //mostro una view dei prodotti
    require '../app/view/prodotti.php';
    require '../app/view/header.php';
    require '../app/view/footer.php';
   }

   public function home () {
    //mostro una view dei prodotti
    require '../app/view/header.php';
    echo "<h1>Benvenuto nella Home Page</h1>";

    require '../app/view/footer.php';
   }
}