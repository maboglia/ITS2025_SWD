<?php include 'model/prodotto.php'; ?>
<?php include 'controller/prodottiCtrl.php'; ?>

<?php
    $ctrl = new ProdottiCtrl();

    $p1 =new Prodotto("Iphone", 1000);
    $p2 =new Prodotto("Ipad", 500);
    $p3 =new Prodotto("Macbook", 2000);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    if (isset($_GET['nomeProdotto'])) {

        $nomeProdotto = $_GET['nomeProdotto'];
        $prezzoProdotto = $_GET['prezzoProdotto'];
        $prodotto = new Prodotto($nomeProdotto, $prezzoProdotto);
        $ctrl->addProdotto($prodotto);
    }
        //index.php?nomeProdotto=pizza&prezzoProdotto=10

    $tuttiProdotti = $ctrl->getProdotti();
    foreach($tuttiProdotti as $prodotto){
        echo '-----------------------' . '<br>';
        echo $prodotto . '<br>';
    }

?>