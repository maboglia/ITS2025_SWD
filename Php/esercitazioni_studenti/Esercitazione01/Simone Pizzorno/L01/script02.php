<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sasso Carta Forbice</h1>
    <a href="?simbolo=sasso">Sasso</a>
    <a href="?simbolo=carta">Carta</a>
    <a href="?simbolo=forbice">Forbice</a>

    <?php
        $sceltaUmano = '';
        //GET è un array associativo che contiene i parametri passati in GET
        //sono come i dizionari in python, caratterizzati da una chiave e un valore
        //se non c'è il parametro simbolo, non faccio nulla
        if ( isset($_GET["simbolo"] )){
            $sceltaUmano = $_GET["simbolo"];
        }
    
    ?>
    <h2>La scelta di umano è: <?= $sceltaUmano ?></h2>

    <?php
        $sceltaMacchina = "";
        //              0       1       2
        $scelte = ["sasso","forbice","carta"];

        $casuale = array_rand($scelte);

        $sceltaMacchina = $scelte[$casuale];

    ?>
    <h2>La scelta di macchina è: <?= $sceltaMacchina?></h2>

    <?php
        function valuta($umano, $macchina){
            if ($umano == $macchina){
                return "Pareggio";
            } else {
                switch($umano){
                    case "sasso":
                        if ($macchina == "forbice")
                            return "Vince UMANO";
                        else
                            return "Vince MACCHINA";
                    case "carta":
                        if ($macchina == "sasso")
                            return "Vince UMANO";
                        else
                            return "Vince MACCHINA";
                    case "forbice":
                        if ($macchina == "carta")
                            return "Vince UMANO";
                        else
                            return "Vince MACCHINA";
                }
            }

        }
        $result = valuta($sceltaUmano, $sceltaMacchina);

    ?>
    <h2>Il risultato è: <?= $result?></h2>

</body>
</html>