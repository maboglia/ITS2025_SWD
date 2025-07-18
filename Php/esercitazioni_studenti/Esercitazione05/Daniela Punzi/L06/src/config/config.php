<?php


//costanti --> in php si dichiarano in 2 modi
define('TITOLO', 'Autosalone SWD');     // define() e passo obbligatoriamente 2 parametri: nome della costante e un valore misto


//parametri database
define('HOST', 'localhost:3306');
define('USER', 'its_2025');
define('PASS', 'punzi');    // --> grazie a questi parametri io mi potrò conllegare

//routing
define('SRC', '../src/');   // --> src è la rotta. A partire da index trovo src
define('VIEW', SRC.'view/');   // --> cioè devo fare una cartella view dove mettere le viste, cioè la parte visisbile del mio programma

require_once SRC.'model/Automobile.php';
require_once SRC.'repos/Connessione.php';
require_once SRC.'repos/AutomobileDAO.php';
require_once SRC.'service/AutosaloneService.php';
require_once SRC.'controller/AutosaloneMVC.php';