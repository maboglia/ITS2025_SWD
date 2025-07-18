<?php

//costanti
define('Titolo','Autosalone SWD');

//parametri database
define('HOST','localhost:3306');
define('user','ITS_2025');
define('password','ITS_2025');
define('db','autosalone_swd');

//routing
define('SRC','../src/');
define('VIEW',SRC.'view/');



require_once SRC.'model/Automobile.php';
require_once SRC.'repos/AutomobileDAO.php';
require_once SRC.'service/AutosaloneService.php';
require_once SRC.'controller/AutosaloneMVC.php';
require_once SRC.'config/connessione.php';















