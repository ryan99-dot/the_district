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
  let demande = document.getElementById("demande").value;
  if (!filtre_caractere.test(prenom)) {
    alert("Entrez votre prénom");
  }
  if (!filtre_caractere.test(nom)) {
    alert("Entrez votre nom");
  }
  if (!filtre_email.test(email)) {
    alert("Entrez une adresse mail valide");
  }
  if (!filtre_telephone.test(telephone)) {
    alert("Entrez votre numéro de tépléhone");
  }
  if (/^\s*$/.test(demande)){
    alert("Ecivez votre demande");
  }
  if (!filtre_numero.test(numero)) {
    alert("Entrez le numéro de votre logement");
  }
  if (!filtre_adresse.test(rue)) {
    alert("Entrez le nom de la rue de votre logement");
  }
  if (!filtre_code_postal.test(code_postal)) {
    alert("Entrez le code postal sur 5 chiffres");
  }
  if (!filtre_caractere.test(ville)) {
    alert("Entrez le nom de votre ville");
  }
}