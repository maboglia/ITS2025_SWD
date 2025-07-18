<h1><?=TITOLO?></h1>

<table>
    <thead>
        <tr>
            <th>nome</th>
            <th>tipo1</th>
            <th>tipo2</th>
            <th>generazione</th>
            <th>leggendario</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($allPokemon as $pokemon) : ?>     <!-- sintassi dichiarativa-->

        <tr>
            <td><?=$pokemon->nome?></td>
            <td><?=$pokemon->tipo1?></td>
            <td><?=$pokemon->tipo2?></td>
            <td><?=$pokemon->generazione?></td>
            <td><?=$pokemon->leggendario?></td>
            <td><img src="<?=$pokemon->getImage()?>"></td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>