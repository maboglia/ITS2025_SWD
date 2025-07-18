<h1><?=TITOLO?></h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo1</th>
            <th>Tipo2</th>
            <th>Generation</th>
            <th>Legendario</th>
        </tr>
    </thead>
    <tbody>

        <?phP foreach($allPokemon as $pokemon):?>
        <tr>
            <td><?=$pokemon->nome?></td>
            <td><?=$pokemon->tipo1?></td>
            <td><?=$pokemon->tipo2?></td>
            <td><?=$pokemon->generation?></td>
            <td><?=$pokemon->legendario?></td>
            <td><img src="<?=$pokemon->getImage()?>"></td>


        </tr>
        <?php endforeach;?>

    </tbody>
</table>