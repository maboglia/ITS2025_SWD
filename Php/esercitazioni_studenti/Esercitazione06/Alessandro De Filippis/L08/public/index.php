<?php require_once '../app/controller/ProdottoMVC.php';?>
<?php require_once '../app/model/Prodotto.php';
use app\controller\ProdottoMVC;?>
<?php require_once '../app/services/ProdottoService.php';?>
<?php require_once '../app/repos/ProdottoRepo.php';?>

<?php

//routing

$pagina = $_GET['page'] ?? 'home';
//if(isset($_GET['page'])){
//    $pagina = $_GET['page'];
//}
$controller = new ProdottoMVC();

switch($pagina){
    case 'prodotti':
        $controller->index();
        break;
    default:
        $controller->home();
        break;
}