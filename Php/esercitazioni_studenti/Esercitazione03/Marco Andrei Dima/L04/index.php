<?php
// declare(strict_types=1); // per forzare il tipo di dato

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";


$controller = new Prodotti;
// $controller->add($p1);  //aggiungo il prodotto alla lista
// var_dump($controller->getProdotti()); //stampo la lista dei prodotti
// echo "<h1>" .$p1->nome . "</h1>";
// echo json_encode($p1);

// $dao = new ProdottoDao;


// echo $dao->salvaProdotto($p1); //stampo la query di salvataggio del prodotto
// echo $dao->dammiProdotti(); //stampo la query di selezione dei prodotti
 
$prodotti = file("prodotti.csv");
// var_dump($prodotti); //stampo il contenuto del file csv

foreach($prodotti as $riga) {
    $pezzi = explode(",", $riga);
    $p1 = new Prodotto;

    $p1->id = $pezzi[0];
    $p1->nome = $pezzi[1];
    $p1->categoria = $pezzi[2];
    $p1->prezzo = $pezzi[3]; //casto il prezzo a float   
    $p1->giacenza = $pezzi[4]; //casto la giacenza a int

    $controller->add($p1); //aggiungo il prodotto alla lista

}


header("Content-type: application/json");

echo json_encode($controller->getProdotti());


// $nome = "Marco";

// define("CORSO","Software developer ");

// function procedura() {
//     echo CORSO;
//     global $nome;
//     $nome = "Marco Dima ";
//     echo $nome;
//     echo date("d-m-Y h:i:s");

// }

// function funzione($a, $b) {
//     return $a + $b;

// }

// function prova($a, $b = 2) {
//     return $a * $b;
// }
// //procedura();

// echo "<pre>";
// var_dump($nome);
// print_r($nome);
// echo "</pre>";

// echo funzione("7",8);

// echo prova(7,4);
?>