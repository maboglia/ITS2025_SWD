<?php

    include './controller/ProdottoCtrl.php';

    $pagina =  htmlspecialchars($_GET['q']) ??  'home';
    //$pagina =   'home';

    $controller = new ProdottoCtrl();

    switch ($pagina) {
        case 'elettronica':
            $controller->getProdotti();
            break;
        
        default:
            $controller->home();
        break;
    }


?>
