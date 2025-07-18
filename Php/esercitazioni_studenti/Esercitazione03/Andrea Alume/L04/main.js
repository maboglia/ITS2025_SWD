const tabella = document.querySelector("#prodotti");
const URL = "index.php";

fetch(URL)
    .then(res => res.json())
    .then(prodotti => {
        for (const prodotto of prodotti) {
            const tr = document.createElement("tr");
            const td_nome = document.createElement("td");
            td_nome.textContent = prodotto.nome;

            const td_prezzo = document.createElement("td");
            td_prezzo.textContent = prodotto.prezzo;

            tr.append(td_nome, td_prezzo); 
            tabella.append(tr); 
        }
    })
