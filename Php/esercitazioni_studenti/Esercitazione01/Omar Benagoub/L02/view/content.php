<h1>Slide show</h1>



<?php
function inc() {
    global $counter;
    return $counter++;
}

function dec() {
    global $counter;
    return $counter--;
}

    $counter = (isset($_GET['contatore'])) ? $_GET['contatore'] : 0;

    $counter++;
    echo '<h2>' . $counter .'</h2>';
   
?>

<img src="./img/torino<?=$counter?>.jpeg" alt="">


<a href="?contatore=<?=$counter?>"> Avanti</a>

<p>
    Ciao, questo è il contenuto di prova
</p>
