<h1> Slideshow</h1>

<?php 
    function inc(){
        global $counter;
        return $counter++;
    }
    function dec(){
        global $counter;
        return $counter--;
    }


    $counter = (isset($_GET['contatore'])) ? $_GET['contatore']:0; //il contatore al'inizio era 0

    inc();

    echo '<h2>' . $counter . '</h2>';  //lo stampo
?>

<img src="./img/torino<?=$counter?>.jpeg" alt = "">

<a href="?contatore=<?=$counter?>"> Avanti </a>     <!--<?=$counter?> se vuoi mettere un'etichetta-->

<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatem quam sint obcaecati minima labore eius tempora laborum non veniam? 
    Veniam asperiores voluptatibus nesciunt, nam inventore totam exercitationem tempora quaerat?
</p>





<!-- esercizio iniziale
<h1> Slideshow</h1>

<?php 

    $counter = 0; //il contatore al'inizio era 0

    $counter++;  //lo incremento di 1

    echo '<h2>' . $counter . '</h2>';  //lo stampo
?>

<a href="?contatore=<?=$counter?>"> Avanti </a>     <?=$counter?> se vuoi mettere un'etichetta-->
<!--
<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatem quam sint obcaecati minima labore eius tempora laborum non veniam? 
    Veniam asperiores voluptatibus nesciunt, nam inventore totam exercitationem tempora quaerat?
</p>
-->