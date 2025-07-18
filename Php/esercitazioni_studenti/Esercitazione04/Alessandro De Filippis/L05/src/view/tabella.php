<h1><?=TITOLO?></h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo1</th>
            <th>Tipo2</th>
            <th>Generation</th>
            <th>Leggendario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allPokemon as $pokemon) : ?>

            <tr>
                <td><?=$pokemon->nome?></td>
                <td><?=$pokemon->Tipo1?></td>
                <td><?=$pokemon->Tipo2?></td>
                <td><?=$pokemon->Generation?></td>
                <td><?=$pokemon->Leggendario?></td>
                <td><img src="<?=$pokemon->getImage()?>"></td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>