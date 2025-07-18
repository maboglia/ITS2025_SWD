<h1>Prodotti</h1>
<table>
    <thead>
        <tr>
            <th>nome</th>
            <th>categoria</th>
            <th>prezzo</th>
            <th>origine</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($prodotti as $prodotto): ?>
        <tr>
            <td><?= $prodotto->nome ?></td>
            <td><?= $prodotto->categoria ?></td>
            <td><?= $prodotto->prezzoKg ?></td>
            <td><?= $prodotto->origine ?></td>
        </tr>
    <?php endforeach; ?>

</table>