const TABELLA = document.querySelector("#prodotti");
const URL = "index.php";
fetch(URL)
    .then((response) =>response.json())
    .then(PRODOTTI => {
        for (const prodotto of PRODOTTI) {
            console.log(prodotto);
            const TR = document.createElement("TR");
            const TDNome = document.createElement("TD");
            TDNome.textContent = prodotto.nome;
            const TDPrezzo = document.createElement("TD");
            TDPrezzo.textContent = prodotto.prezzo;
            TR.append(TDNome, TDPrezzo);
            TABELLA.append(TR);
            
        }
    })
      
        
