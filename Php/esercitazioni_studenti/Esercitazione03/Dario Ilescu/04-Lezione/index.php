<?php
    //declare(strict_types=1);

    include "./Prodotto.php";
    include "./Prodotti.php";
    include "./ProdottoDao.php";

    $controller = new Prodotti;
    //$controller -> add($p1); 

    //var_dump($controller->getProdotti());

    //echo "<h1>" . $p1->nome . "</h1>"; //mvc model view controller

    //echo json_encode($p1); //rest

    //$dao = new ProdottoDao;

    //echo $dao->salvaProdotto($p1);
    //echo $dao->dammiProdotti();

    $prodotti = file("prodotti.csv");
    //var_dump($prodotti);

    foreach($prodotti as $riga){

        $pezzi = explode(",",$riga);

        $p1 = new Prodotto;

        $p1->id = $pezzi[0];

        $p1->nome = $pezzi[1];

        $p1->cetgoria = $pezzi[2];

        $p1->prezzo = $pezzi[3];

        $p1->giacenza = $pezzi[4];

        $controller -> add($p1); 

    }

    header("Content-type: application/json");

    echo json_encode($controller->getProdotti());

    /*
    $nome = "Dario";

    define ("CORSO","SOFTWARE DEVELOPER (SWD)");

    function procedura(){

        echo CORSO;
        global $nome;
        $nome = "Dario Ilescu";
        echo $nome;
        echo date("d-m-Y- h:i:s");

    }

    function funzione($a, int $b) : int|string {

        return $a=$b;

    }

    function prova(int $a, $b = 2) : int{

        return $a=$b;

    }

    procedura()

    echo "<pre>";
    var_dump($nome);
    print_r($nome);
    echo "</pre>";

    echo "<pre>";
    echo funzione("2",3);
    echo prova(2,9);
    echo "</pre>";
    */

?>
