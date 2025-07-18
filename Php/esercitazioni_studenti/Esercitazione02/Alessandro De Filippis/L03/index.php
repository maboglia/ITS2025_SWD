<?php include 'model/prodotto.php'; ?>
<?php include 'model/prodotto.php'; ?>

<?php
    $ctrller = new ProdottoCtrl();

    $p1 = new Prodotto("Iphone", 1200);
    $p2 = new Prodotto("huawey", 200);
    $p3 = new Prodotto("Samsung", 400);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    if(isset($_GET['nomeProdotto'])){
        $nomeProdotto = $_GET['nomeProdotto'];
        $prezzoProdotto = $_GET['prezzoProdotto'];
        $prodotto = new Prodotto(nome: $nomeProdotto, prezzo:$prezzoProdotto);
        $ctrl->addProdotto(prodotto: $prodotto);
    }

    $tuttiProdotti = $ctrl->getProdotti();

    foreach($tuttiProdotti as $prodotto){
        echo $prodotto . "<br>";
    }

?>