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

require_once(__DIR__. "/verif_form.php");

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