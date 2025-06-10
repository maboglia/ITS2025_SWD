const TBODY = document.querySelector('table>tbody')

function riga(prodotto) {
    
    const TR = document.createElement('tr')
    const TD1 = document.createElement('td')
    const TD2 = document.createElement('td')
    const TD3 = document.createElement('td')
    const TD4 = document.createElement('td')

    TD1.textContent = prodotto.nome
    TD2.textContent = prodotto.categoria
    TD3.textContent = prodotto.prezzo
    TD4.textContent = prodotto.giacenza

    TR.append(TD1,TD2,TD3,TD4)

    return TR
}

const URL_PRODOTTI = 'api/prodotti'

fetch(URL_PRODOTTI)
    .then(response => response.json())
    .then(prodotti => {
        for (const prodotto of prodotti) {
            
            TBODY.append(riga(prodotto))

        }
    })