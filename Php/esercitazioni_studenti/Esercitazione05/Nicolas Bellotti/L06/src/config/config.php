<?php

define('TITOLO','Autosalone SWD');

define('HOST','localhost');
define('USER','nik');
define('PASS','bellotti');

define('SRC','../src/');
define('VIEW',SRC .'view/');


require_once SRC.'model/Automobile.php';
require_once SRC.'config/Connessione.php';
require_once SRC.'repos/AutomobileDAO.php';
require_once SRC.'service/AutosaloneService.php';
require_once SRC.'controller/AutosaloneMVC.php';