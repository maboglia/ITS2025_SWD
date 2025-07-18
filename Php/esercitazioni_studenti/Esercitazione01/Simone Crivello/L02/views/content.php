

<h1>Slideshow</h1>


<?php

    function inc(){
        global $counter;
        return $counter ++;
    }

    function dec(){
        global $counter;
        return $counter--;
    }

    $counter = (isset($_GET['contatore'])) ? $_GET['contatore'] : 0;

    inc();

    echo '<h2>' . $counter . '</h2>';
?>

<img src="./img/download<?=$counter?>.jpg"alt="">
<a href="?contatore=<?=$counter?>">Avanti</a>

<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi nam voluptatem aperiam tenetur iure? Minus cupiditate accusantium, repellendus, quod consequatur aperiam laudantium tempore consectetur eligendi tempora nemo tenetur ex officia.
</p>
