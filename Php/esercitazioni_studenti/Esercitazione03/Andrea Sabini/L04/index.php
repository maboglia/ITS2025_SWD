<?php 

//declare(strict_types=1); //impostazione del tipo di dato per le variabili, in questo caso solo numeri interi
include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";

$controller= new Prodotti;
//$controller->add($p1);

//var_dump($controller->getProdotti());

//echo "<h1>" .$p1->nome . "</h1>"; //model view controller
//echo json_encode($p1); //rest 

//$Dao= new ProdottoDao;
//echo $Dao->salvaProdotto($p1); //inserisce il prodotto nel database
//echo "<br>";
//echo $Dao->dammiProdotti(); //restituisce i prodotti dal database

$prodotti = file('prodotti.csv');
//var_dump($prodotti); 

foreach($prodotti as $riga){
    $pezzi = explode(',', $riga); //separatore virgola
    $p1= new Prodotto;
    
    $p1->id=$pezzi[0];
    $p1->nome = $pezzi[1];
    $p1-> categoria= $pezzi[2];
    $p1->giacenza= $pezzi[3];
    $p1->prezzo = (float)$pezzi[4];


    $controller->add($p1);
}


header('Content-Type: application/json'); //mime type (tutti ne hanno uno)

echo json_encode($controller-> getProdotti()); //restituisce i prodotti in formato json
