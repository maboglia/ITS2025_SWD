<?php include 'model/prodotto.php'; ?>
<?php include 'controller/prodottictrl.php'; ?>

<?php


    $ctrl = new Prodottictrl();
    $p1 = new Prodotto('iPhone', 1000);
    $p2 = new Prodotto('Huwei', 200);
    $p3 = new Prodotto('Samsung',400);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    if(isset($_GET['nomeProdotto'])) {
        $nomeProdotto = $_GET['nomeProdotto'];
        $prezzoProdotto = $_GET['prezzoProdotto'];
        $prodotto_temp = new Prodotto($nomeProdotto, $prezzoProdotto);
        $ctrl->addProdotto($prodotto_temp);
    }    

    $tuttiProdotti = $ctrl->getProdotti();

    foreach ($tuttiProdotti as $Prodotto) {
        echo $Prodotto . '<br>';  //non piace ma non è deprecato
    }

?>

