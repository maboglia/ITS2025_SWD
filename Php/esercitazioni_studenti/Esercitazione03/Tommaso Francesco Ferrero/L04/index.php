<?php 
 //declare(strict_types = 1);
 
 include "./Prodotto.php";
 include "./Prodotti.php";
 include "./ProdottoDao.php";



$controller = new Prodotti;
//$controller-> add($p1);
//var_dump($controller->getProdotti());

//echo "<h1>".$p1->nome."</h1>";//mvc model view controller
//echo json_encode($p1);//rest

// $dao = new ProdottoDao;

// echo $dao->salvaProdotto($p1);
// echo $dao->dammiProdotti();

$prodotti = file("prodotti.csv");//lettura file e salvataggio in un array di righe
//var_dump($prodotti);

foreach($prodotti as $riga){
    $pezzi = explode(",",$riga);
    $p1 = new Prodotto;

    $p1->id = $pezzi[0];
    $p1->nome = $pezzi[1];
    $p1->categoria = $pezzi[2];
    $p1->prezzo = $pezzi[3];
    $p1->giacenza = $pezzi[4];
    
    $controller-> add($p1);
}

//mime type (tutti i file ne hanno uno)
header("Content-type: application/json");

echo json_encode($controller-> getProdotti());










 
 
 
 
 
 
 
 /*$nome = "Tommaso";

 define("CORSO", "software developer ");

 function procedura(){
    echo CORSO;
    global $nome;
    $nome = "Tommaso Ferrero ";
    echo $nome;
    echo date("d-m-Y h:i:s");
 }

 function funzione(int $a, int $b):int{
    return $a + $b;
 }

 function prova($a, $b = 2){ //il default va sempre per ultimo
    return $a * $b;
 }
 //procedura();

echo "<pre>";
var_dump($nome);
print_r($nome);
echo "</pre>";

echo funzione(7,8);
echo prova(7,3);
*/





?>