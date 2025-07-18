<?php

//costanti
define('TITOLO','Autosalone SWD');

//parametri db
define('HOST','localhost:3306');
define('USER','ITS_2025');
define('PASS','ITS_2025');

define('SRC','../src/');
define('VIEW',SRC.'view/');

require_once SRC.'model/Automobile.php';
require_once SRC.'repos/Connessione.php';
require_once SRC.'repos/AutomobileDAO.php';
require_once SRC.'service/AutosaloneService.php';
require_once SRC.'controller/AutosaloneMVC.php';