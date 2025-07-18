<?php
// declare(strict_types=1); // tipizza tutte le variabili nel documento php pure le funzioni
 
 include 'Prodotto.php';
 include 'Prodotti.php';
 include 'ProdottoDAO.php';
 
$p1 = new Prodotto();

$p1 -> id = 1;
$p1 -> nome = 'Smart TV';
$p1 -> prezzo = 800;
$p1 -> giacenza = 150;
$p1 -> categoria = 'Informatica';

$ctrl = new Prodotti();
// $ctrl -> add($p1);
// var_dump($ctrl -> getProdotti());

// echo "<h1>".$p1->nome."</h1>"; // mvc model view controller
// echo json_encode($p1);


// $DAO = new ProdottoDAO();  // DAO (Data Access Object)
// echo $DAO -> saveProdotto($p1);
// echo "<br>";
// echo $DAO -> getProdotti();

$prodotti = file('prodotti.csv'); // lettura del file csv e conversione in array
// var_dump($prodotti);

foreach($prodotti as $riga){
    $pezziDiRiga = explode(',',$riga);
    $p = new Prodotto();

    $p -> id = $pezziDiRiga[0];
    $p -> nome = $pezziDiRiga[1];
    $p -> prezzo = $pezziDiRiga[3]; // non funge se c'è declare che trasforma PHP in Java, e bisogna obbligatoriamente  castarlo a Float 
    $p -> giacenza = $pezziDiRiga[4];
    $p -> categoria = $pezziDiRiga[2];
    $ctrl -> add($p);
}
// mime type json (Tutti i file ne hanno uno)
header("Content-Type: application/json");
echo json_encode($ctrl -> getProdotti());

?>