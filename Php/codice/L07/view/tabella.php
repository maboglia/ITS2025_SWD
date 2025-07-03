<table>
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Prezzo</th>
        <th>Giacenza</th>
    </tr>

    <tbody>
        <?php foreach($prodotti as $prodotto):  ?>
        <tr>
            <td><?= $prodotto->nome ?></td>
            <td><?= $prodotto->categoria ?></td>
            <td><?= $prodotto->prezzo ?></td>
            <td><?= $prodotto->giacenza ?></td>
        </tr>
        <?php endforeach;  ?>
    
    </tbody>

</table>