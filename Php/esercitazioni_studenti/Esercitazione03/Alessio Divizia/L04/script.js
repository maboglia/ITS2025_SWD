const TABELLA = document.querySelector("#prodotti");
const URL = "index.php";

fetch(URL)                  // Concateno più metodi
.then(res => res.json())
.then(prodotti => {
for (const prodotto of prodotti) {
    console.log(prodotto);
    const TR = document.createElement("tr");
    const TD_NOME = document.createElement("td");
    TD_NOME.textContent = prodotto.nome;
    const TD_PREZZO = document.createElement("td");    TD_PREZZO.textContent = prodotto.prezzo;
    TABELLA.append(TD_NOME,TD_PREZZO);
    TABELLA.append(TR);
    }
})
