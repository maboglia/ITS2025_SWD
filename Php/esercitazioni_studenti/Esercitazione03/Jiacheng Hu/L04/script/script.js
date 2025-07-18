const TABLE_BODY = document.querySelector("#products>tbody");
const URL = "index.php";

fetch(URL)
.then(response => response.json())
.then(data => {
    for (const product of data) {
        const TR = document.createElement("tr");
        const TD_NAME = document.createElement("td");
        const TD_PRICE = document.createElement("td");

        TD_NAME.textContent = product.name;
        TD_PRICE.textContent = product.price;

        TR.append(TD_NAME, TD_PRICE);
        TABLE_BODY.append(TR);
    }
})