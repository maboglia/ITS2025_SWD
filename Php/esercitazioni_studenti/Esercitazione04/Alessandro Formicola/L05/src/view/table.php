<h1> <?= TITOLO?> </h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Type-1</th>
            <th>Type-2</th>
            <th>Generation</th>
            <th>Legendary</th>
            <th>Pic</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($allPokemon as $pokemon): ?>
        <tr>
            <td><?=$pokemon->name?></td>
            <td><?=$pokemon->type1?></td>
            <td><?=$pokemon->type2?></td>
            <td><?=$pokemon->Generation?></td>
            <td><?=$pokemon->Legendary?></td>
            <td><img src="<?=$pokemon->getImmage()?>"></td>
        </tr>
    <?php endforeach; ?>
        
    </tbody>
</table>