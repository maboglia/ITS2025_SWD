const TABELLA = document.querySelector("#prodotti");
const URL = "index.php";
fetch(URL)
  .then(response => response.json())  
  .then(prodotti => {
    for (const prodotto of prodotti) {
        console.log(prodotto);
        const tr = document.createElement("tr");
        const tdNome = document.createElement("td");
        tdNome.textContent = prodotto.nome;
        const tdPrezzo = document.createElement("td");
        tdPrezzo.textContent = prodotto.prezzo;
        tr.append(tdNome, tdPrezzo);
        TABELLA.append(tr);

        
    }
  })
