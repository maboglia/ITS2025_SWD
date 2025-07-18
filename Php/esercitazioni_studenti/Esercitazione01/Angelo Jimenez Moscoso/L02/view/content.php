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

    $counter = (isset($_GET['contatore']))? $_GET['contatore']: 0;

    inc();

    echo '<h2>'.$counter.'<h2>';


?>

<img src="./img/Madrid<?=$counter?>.webp" alt="">

<a href="?contatore=<?=$counter?>">Avanti</a>

<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo qui voluptatem omnis eaque reiciendis aliquam in. Eum aut quisquam et, neque rem molestias quas harum sunt laboriosam iste placeat.
</p>