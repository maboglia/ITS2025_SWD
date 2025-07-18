<?php 

$saluto = "Hello World!";


$a = 5;


// gestione condizione if, else, else-if

if ($a == 5) {
    
    $saluto = "Hello PHP!";
} else if ($a < 5) {

    $saluto = "Abbasso a Python!";
} else {
    $saluto = "Viva Java!";
}

echo "<h1>" .$saluto . "</h1>";

// gestione iterazione con il ciclo for

for ($i = 0; $i < 10; $i++) {
    echo "<h1>". $saluto ."</h1>"; //opzionale usare '\n' per andare a capo
}

?>