

<?php require_once '../app/model/Prodotto.php';?>
<?php require_once '../app/repos/ProdottoRepo.php';?>
<?php require_once '../app/controller/ProdottoMVC.php';?>
<?php require_once '../app/service/ProdottoService.php';?>
<?php require_once '../vendor/autoload.php';?>

<?php
use app\controller\ProdottoMVC;


//routing 
// $pagina = 'home';

$pagina = $_GET['page'] ?? 'home'; // Se non è impostato, di default è 'home'

//if (isset($_GET['page'])) {
  //  $pagina = $_GET['page'];
//}

$controller =new ProdottoMVC();

switch ($pagina) {
    case 'prodotti':
        
        $controller->index();
        break;
    default:
        // Home page
        $controller->home();
        break;
}