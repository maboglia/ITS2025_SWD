<h1>SlideShow</h1>


<?php

function Inc(){
    global $counter;
    return $counter++;
}
function Dec(){
    global $counter;
    return $counter--;
}
$counter = (isset($_GET['contatore'])) ? $_GET['contatore'] : 0;
Inc();
echo '<h2>' .$counter . '</h2>';
?>

<a href="?contatore=<?=$counter?>">Avanti Tutta</a>

<a href="?contatore=<?=$counter?>">Indietro Tutta</a>

<p>
    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum alias libero illum, dolores nesciunt quae reiciendis minima rerum aspernatur veniam eum sit dolorum reprehenderit doloremque ex optio, nulla perferendis dolor.</b>
</p>

<img src="./img/Milano<?=$counter?>.jpg" alt="">