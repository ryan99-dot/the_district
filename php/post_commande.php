<?php require_once("DAO.php");
$dao = new DAO();
$maxId = $dao->autoIncrement('commande');
if (isset($_POST['quantite'], $_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['numero'], $_POST['rue'], $_POST['code_postal'], $_POST['ville'], $_POST['id_plat'])) {
    $quantite = $_POST['quantite'];
    $nom = $_POST['prenom'] . " " . $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['numero'] . " " . $_POST['rue'] . ", " . $_POST['code_postal'] . " " . $_POST['ville'];
    $idPlat = $_POST['id_plat'];
    $plat = $dao->getPlat($idPlat);
    if ($plat) {
        $commande = [
            'id_plat' => $plat->id,
            'quantite' => $quantite,
            'total' => $plat->prix * $quantite,
            'date_commande' => date("Y-m-d H:i:s"),
            'etat' => 'En préparation',
            'nom_client' => $nom,
            'telephone_client' => $telephone,
            'email_client' => $email,
            'adresse_client' => $adresse
        ];
        $dao->creationCommande($commande);
    }
} else {
    echo "Certains champs sont manquants.";
}
require_once(__DIR__ . "/header.php"); ?>


<br>
<br>
<br>
<br>
<br>

<?php
$num_commande = 0;
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) : ?>
    <h3>Il faut un email valide pour confirmer la commande.</h3><br>
<?php endif;
if (!preg_match('/^0\d{9}$/', $_POST["telephone"])) : ?>
    <h3>Il faut un numéro de téléphone valide pour confirmer la commande.</h3><br>
<?php endif;
if (!preg_match('/^\d+[\wÀ-ÿ\s-]*$/', $_POST["numero"])) : ?>
    <h3>Il faut un numéro de logement valide pour confirmer la commande.</h3><br>
<?php endif;
if (!preg_match('/^\d{5}$/', $_POST["code_postal"])) : ?>
    <h3>Il faut un numéro de code postal valide pour confirmer la commande.</h3><br>
<?php endif;
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !preg_match('/^0\d{9}$/', $_POST["telephone"]) || !preg_match('/^\d+[\wÀ-ÿ\s-]*$/', $_POST["numero"]) || !preg_match('/^\d{5}$/', $_POST["code_postal"])) : ?>
    <div class="d-flex justify-content-center mt-5">
        <button class="border-0 rounded-4" id="retour_form">
            <a href="commande.php" class="text-decoration-none text-dark fs-2">Retour au panier</a>
        </button>
    </div>
<?php else : ?>
    <div id="recap_form">
        <h2 class="my-5 text-center">Votre commande (n°<?= ($maxId + 1) ?>) a été transmise avec succès !</h2>
        <h3 class="ms-4">Récapulatif de votre commande :</h3>
        <ul id="liste_recap_form" class="ms-5">
            <li>Votre plat : <?= strip_tags($plat->libelle)  ?></li>
            <li>Prix total : <?= strip_tags($plat->prix * $quantite)  ?></li>
            <li>Votre prénom : <?= strip_tags($_POST["prenom"])  ?></li>
            <li>Votre nom : <?= strip_tags($_POST["nom"])  ?></li>
            <li>Votre email : <?= strip_tags($_POST["email"])  ?></li>
            <li>Votre téléphone : <?= strip_tags($_POST["telephone"])  ?></li>
            <li>Votre adresse : <?= strip_tags($_POST["numero"] . " " . $_POST["rue"] . ", " . $_POST["code_postal"] . " " . $_POST["ville"]) ?></li>
        </ul>
    </div>
<?php endif;
$nomFichier = "../assets/commandes/Commande n" . ($maxId + 1) . "_" . $date . "-" . $time . ".txt";
$fichier = fopen($nomFichier, "c+b");
if (!$fichier) {
    echo "Erreur lors de l'ouverture du fichier.";
    exit;
}
fwrite($fichier, "\nPlat : " . $plat->libelle);
fwrite($fichier, "\nPrix total : " . $plat->prix * $quantite);
fwrite($fichier, "\nPrénom : " . $_POST["prenom"]);
fwrite($fichier, "\nNom : " . $_POST["nom"]);
fwrite($fichier, "\nEmail : " . $_POST["email"]);
fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
fwrite($fichier, "\nAdresse : " . $_POST["numero"] . $_POST["rue"] . ", " . $_POST["code_postal"] . $_POST["ville"]);
?>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';
$mail = new PHPMailer(true);
// On va utiliser le SMTP
$mail->isSMTP();
// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';
// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;
// On configure le port SMTP (MailHog)
$mail->Port       = 1025;
// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');
// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress($_POST["email"], $_POST["prenom"] . "" . $_POST["nom"]);
//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");
//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");
// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);
// On ajoute la/les pièce(s) jointe(s)
$mail->addAttachment($nomFichier);
// Sujet du mail
$mail->Subject = "Confirmation de votre commande";
// Corps du message
$mail->Body = "Bonjour, veuillez trouver le récapitulatif de votre commande en pièce jointe";
// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail) {
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
    } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
    }
}

require_once(__DIR__ . "/footer.php"); ?>