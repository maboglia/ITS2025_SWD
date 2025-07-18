<h1>Prodotti</h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Origine</th>
            <th>Prezzo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($prodotti as $prodotto) : ?>
        <tr>
            <td><?= $prodotto->nome ?></td>
            <td><?= $prodotto->categoria ?></td>
            <td><?= $prodotto->prezzoIvato() ?>€/kg</td>
            <td><?= $prodotto->origine ?></td>
        <?php endforeach; ?>
    </tbody>
</table>