const tabella = document.querySelector("#prodotti");

const URL = "index.php";    //trovo un array formato json pieno di prodotti

fetch(URL)  //chiamo e se la richiesta va a buon fine riceverà una riposta
    .then(res=>res.json())     //col metono .json la trasformiamo
    .then(prodotti=>{
        for (const prodotto of prodotti){
            console.log(prodotto);

            const TR = document.createElement("tr");

            const TD_NOME = document.createElement("td");
            TD_NOME.textContent= prodotto.nome;

            const TD_PREZZO = document.createElement("td");
            TD_PREZZO.textContent= prodotto.prezzo;

            TR.append(TD_NOME, TD_PREZZO);
            tabella.append(TR);

        }
    })