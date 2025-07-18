<?php require_once '../vendor/Autoload.php'; 
    
use app\controller\ProdottoMVC;

?>




<?php
//routing

$pagina = $_GET['page'] ?? 'home';
//
$controller=new ProdottoMVC();
switch ($pagina) {
    case 'prodotti':
        $controller->index();
        break;
    
    default:
       $controller->home();
        break;
}