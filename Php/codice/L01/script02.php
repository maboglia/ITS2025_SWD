<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Pietra forbici carta</h1>

    <a href="?simbolo=pietra">pietra</a> 
    <a href="?simbolo=forbici">forbici</a> 
    <a href="?simbolo=carta">carta</a> 

    <?php
        $sceltaUmano = '';

        if ( isset($_GET['simbolo'])  ){
            $sceltaUmano = $_GET['simbolo'];
        }

    ?>

    <h2>La scelta di umano è: <?= $sceltaUmano ?></h2>

    <?php

        $sceltaMacchina = '';
        //           0          1          2
        $scelte = ['pietra', 'forbici', 'carta'];

        $casuale = array_rand($scelte);

        $sceltaMacchina = $scelte[$casuale];

    ?>

    <h2>La scelta di macchina è: <?= $sceltaMacchina ?></h2>

    <?php

        function valuta($umano, $macchina) {
            
            if ($umano == $macchina) {
                return 'PAREGGIO';
            } else {

                switch($umano){

                    case 'pietra':
                        if ($macchina == 'forbici') 
                            return 'Vince UMANO';
                        else
                            return 'Vince Macchina';

                    case 'forbici':
                        if ($macchina == 'carta') 
                            return 'Vince UMANO';
                        else
                            return 'Vince Macchina';

                    case 'carta':
                        if ($macchina == 'pietra') 
                            return 'Vince UMANO';
                        else
                            return 'Vince Macchina';        

                }

            }


        }

        $result = valuta($sceltaUmano, $sceltaMacchina);

    ?>

    <h2>Il risultato è <?= $result ?></h2>

</body>
</html>