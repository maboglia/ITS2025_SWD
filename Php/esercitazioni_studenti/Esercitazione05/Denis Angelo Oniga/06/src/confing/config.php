<?php
//costanti
define('TITOLO','Autosalone SWD');

//parametri database
define('HOST','localhost:3306');
define('USER','ITS_2025');
define('PASS','ITS_2025');

define('SRC','../src/');
define('VIEW',src.'view/');

require_once SRC.'model/Autobile.php';
require_once SRC.'repos/AutobileDAO.php'
require_once SRC.'service/AutobileService.php'
require_once SRC.'controller/AutosaloneMVC.php'





?>
