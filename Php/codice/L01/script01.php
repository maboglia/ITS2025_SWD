<?php

$saluto = 'Hello World!';

$a = 6;
//php gestisce le condizioni con if ..  elseif .. else
if ($a == 5) {
    $saluto = 'Hello PHP!';
} elseif ($a < 5){
    $saluto = "Abbasso Python!!";
} else {
    $saluto = "Viva Java!";
}

/*
PHP gestisce le iterazioni  con i cicli for, foreach, while, do-while
*/
for($i = 0; $i < 10; $i++){
    echo  "<h1>" . $saluto . "</h1>\n" ;
}


?>