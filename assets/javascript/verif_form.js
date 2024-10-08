/*Vérification formulaire*/

let filtre_caractere = new RegExp(/^[A-Za-zÀ-ÿ]+[\s-]*$/);
let filtre_email = new RegExp(/^\S+@\S+\.\S+$/);
let filtre_telephone = new RegExp(/^0\d{9}$/);
let filtre_numero = new RegExp(/^\d+[\wÀ-ÿ\s-]*$/);
let filtre_adresse = new RegExp(/^[\wÀ-ÿ]+[\s-]$/);
let filtre_code_postal = new RegExp(/^\d{5}$/);

function verif() {
  let prenom = document.getElementById("prenom").value;
  let nom = document.getElementById("nom").value;
  let email = document.getElementById("email").value;
  let telephone = document.getElementById("telephone").value;
  let numero = document.getElementById("numero").value;
  let rue = document.getElementById("rue").value;
  let code_postal = document.getElementById("code_postal").value;
  let ville = document.getElementById("ville").value;
  if (filtre_caractere.test(prenom) == false) {
    alert("Entrez votre prénom");
  }
  if (filtre_caractere.test(nom) == false) {
    alert("Entrez votre nom");
  }
  if (filtre_email.test(email) == false) {
    alert("Entrez une adresse mail valide");
  }
  if (filtre_telephone.test(telephone) == false) {
    alert("Entrez votre numéro de tépléhone");
  }
  if (!demande || /^\s*$/.test(demande)){
    alert("Ecivez votre demande");
  }
  if (filtre_numero.test(numero) == false) {
    alert("Entrez le numéro de votre logement");
  }
  if (filtre_adresse.test(rue) == false) {
    alert("Entrez le nom de la rue de votre logement");
  }
  if (filtre_code_postal.test(code_postal) == false) {
    alert("Entrez le code postal sur 5 chiffres");
  }
  if (filtre_caractere.test(ville) == false) {
    alert("Entrez le nom de votre ville");
  }
}