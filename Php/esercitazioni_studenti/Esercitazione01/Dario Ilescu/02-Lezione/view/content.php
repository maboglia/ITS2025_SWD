<h1> Slide show </h1>

<?php

    function inc(){
        global $counter;
        return $counter++;
    }

    function dec($val){
        global $counter;
        return $counter--;
    }

    $counter = (isset($_GET["contatore"])) ? $_GET["contatore"] : 0;

    inc();

    echo "<h2>".$counter."</h2>" ;

?>

<img src="./img/foto<?=$counter?>.webp" alt="">

<a href="?contatore=<?=$counter?>"> AVANTI </a>

<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum amet autem facere voluptatem labore laudantium quos? Inventore saepe eaque esse, quasi ratione corporis corrupti rerum, reiciendis, voluptate dolorum porro error.
</p>