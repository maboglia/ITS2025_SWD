<h1><?=TITOLO?></h1>
<table>
    <thead>
        <tr>
            <th>NOME</th>
            <th>TIPO1</th>
            <th>TIPO2</th>
            <th>GENERAZIONE</th>
            <th>LEGGENDARIO</th>
            <th>PIC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allPokemon as $pokemon) : ?>
            <tr>
                <td><?=$pokemon->nome?></td>
                <td><?=$pokemon->tipo1?></td>
                <td><?=$pokemon->tipo2?></td>
                <td><?=$pokemon->generazione?></td>
                <td><?=$pokemon->leggendario?></td>
                <td><img src ="<?=$pokemon->getImage()?>"></td>
            </tr>
        <?php endforeach; ?> 
    </tbody>
</table>
