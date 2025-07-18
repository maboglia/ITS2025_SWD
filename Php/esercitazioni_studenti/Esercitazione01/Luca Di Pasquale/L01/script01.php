<?php
//php è un linguaggio di programmazione server-side
//per inizializzare una variabile si usa il simbolo $
$saluto = "Ciao";
$a = 6;

//php gestisce le condizioni con if, else if e else
if ($a == 5){
    $saluto = "Hello";
} else if ($a < 5){
    $saluto = "Bonjour";
} else {
    $saluto = "Hola";
}

/*
php gestisce i cicli con for, foreach, while e do while
for (inizializzazione; condizione; incremento)
*/
for ($i = 0; $i < 10; $i++){
    echo "<h1>" . $saluto . "</h1>";
}

echo "<h1>" . $saluto . "</h1>";

?>