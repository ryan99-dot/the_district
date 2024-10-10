let plus = document.getElementById("plus");
let moins = document.getElementById("moins");
let quantite = document.getElementById("quantite");

function ajout() {
    quantite.value = parseInt(quantite.value) + 1;
}

function retrait() {
    if (quantite.value > 1) {
        quantite.value = parseInt(quantite.value) - 1;
    }
}