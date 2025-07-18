<?php require_once '../src/model/Prodotto.php'; ?>
<?php require_once '../src/repos/ProdottoRepo.php'; ?>
<?php require_once '../src/service/ProdottoService.php'; ?>
<?php require_once '../src/controller/ProdottoMVC.php'; ?>

<?php

use app\controller\ProdottoMVC;

$pagina = $_GET['page'] ?? 'home';

//if(isset($_GET['pagina'])) {
   //pagina = $_GET['pagina'];
//

$controller = new ProdottoMVC();

switch ($pagina) {
    case 'prodotti':
        $controller->index();
        break;
    default:
        $controller->home();
        break;
}


