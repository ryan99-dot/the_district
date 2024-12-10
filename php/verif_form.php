<?php
$path = $_SERVER["PHP_SELF"];
$file = basename($path);

$verif_mail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$verif_tel = preg_match('/^0\d{9}$/', $_POST["telephone"]);
$verif_num = preg_match('/^\d+[\wÀ-ÿ\s-]*$/', $_POST["numero"]);
$verif_cp = preg_match('/^\d{5}$/', $_POST["code_postal"]);
$verif_prenom = preg_match('/^[A-Za-zÀ-ÿ]+[\s-]*$/', $_POST["prenom"]);
$verif_nom = preg_match('/^[A-Za-zÀ-ÿ]+[\s-]*$/', $_POST["nom"]);
$verif_rue = preg_match('/^[\wÀ-ÿ]+[\s-]$/', $_POST["rue"]);
$verif_dem = !preg_match('/^\s*$/', $_POST["demande"]);
$verif_ville = preg_match('/^[A-Za-zÀ-ÿ]+[\s-]*$/', $_POST["ville"]);

if (!$verif_prenom) :
    if ($file == "post_contact.php") : ?>
        <h3>Il faut un prénom valide pour soumettre le formulaire.</h3><br>
    <?php elseif ($file == "post_commande.php") : ?>
        <h3>Il faut un prénom valide pour confirmer la commande.</h3><br>
<?php endif;
endif; ?>

<?php if (!$verif_nom) :
    if ($file == "post_contact.php") : ?>
        <h3>Il faut un nom valide pour soumettre le formulaire.</h3><br>
    <?php elseif ($file == "post_commande.php") : ?>
        <h3>Il faut un nom valide pour confirmer la commande.</h3><br>
<?php endif;
endif; ?>

<?php if (!$verif_mail) :
    if ($file == "post_contact.php") :  ?>
        <h3>Il faut un email valide pour soumettre le formulaire.</h3><br>
    <?php elseif ($file == "post_commande.php") : ?>
        <h3>Il faut un email valide pour confirmer la commande.</h3><br>
<?php endif;
endif; ?>

<?php if (!$verif_tel) :
    if ($file == "post_contact.php") :  ?>
        <h3>Il faut un numéro de téléphone valide pour soumettre le formulaire.</h3><br>
    <?php elseif ($file == "post_commande.php") : ?>
        <h3>Il faut un numéro de téléphone valide pour confirmer la commande.</h3><br>
<?php endif;
endif; ?>

<?php if ($file == "post_contact.php" && !$verif_dem) : ?>
    <h3>Il faut remplir le champ de la demande pour soumettre le formulaire.</h3><br>
<?php endif; ?>

<?php if ($file == "comamnde.php" && (!$verif_num || !$verif_rue || !$verif_cp || !$verif_ville)) : ?>
    <h3>Il faut une adresse valide pour confirmer la commande.</h3><br>
<?php endif; ?>

<?php if (!$verif_prenom || !$verif_nom || !$verif_mail || !$verif_tel) :
    if ($file == "post_contact.php" && !$verif_dem) : ?>
        <div class="d-flex justify-content-center mt-5">
            <a href="contact.php" class="text-decoration-none text-dark fs-2 border-0 rounded-4 text-center" id="retour_form">Retour au formulaire </a>
        </div>
    <?php elseif ($file == "post_commande.php" && (!$verif_num || !$verif_rue || !$verif_cp || !$verif_ville)) : ?>
        <div class="d-flex justify-content-center mt-5">
            <a href="commande.php" class="text-decoration-none text-dark fs-2 border-0 rounded-4 text-center" id="retour_form">Retour au panier </a>
        </div>
    <?php endif;
else : ?>
    <div id="recap_form">
        <?php if ($file == "post_contact.php") : ?>
            <h2 class="my-5 text-center">Votre demande a été envoyée avec succès !</h2>
            <h3 class="ms-4">Récapulatif de votre demande :</h3>
        <?php elseif ($file == "post_commande.php") : ?>
            <h2 class="my-5 text-center">Votre commande (n°<?= ($maxId + 1) ?>) a été transmise avec succès !</h2>
            <h3 class="ms-4">Récapulatif de votre commande :</h3>
        <?php endif; ?>
        <ul id="liste_recap_form" class="ms-5">
            <?php if ($file == "post_commande.php") : ?>
                <li>Votre plat : <?= strip_tags($plat->libelle)  ?></li>
                <li>Prix total : <?= strip_tags($plat->prix * $quantite)  ?></li>
            <?php endif; ?>
            <li>Votre prénom : <?= strip_tags($_POST["prenom"])  ?></li>
            <li>Votre nom : <?= strip_tags($_POST["nom"])  ?></li>
            <li>Votre email : <?= strip_tags($_POST["email"])  ?></li>
            <li>Votre téléphone : <?= strip_tags($_POST["telephone"])  ?></li>
            <?php if ($file == "post_contact.php") : ?>
                <li>Votre demande : ' <?= strip_tags($_POST["demande"]) ?></li>
            <?php endif;
            if ($file == "post_commande.php") : ?>
                <li>Votre adresse : <?= strip_tags($_POST["numero"] . " " . $_POST["rue"] . ", " . $_POST["code_postal"] . " " . $_POST["ville"]) ?></li>
            <?php endif; ?>
        </ul>
    </div>
<?php date_default_timezone_set("Europe/Paris");
    $date = date("d-m-Y");
    $time = date("H-i-s");
    if ($file == "post_contact.php") {
        $nomFichier = "../assets/contact/Demande du " . $date . "-" . $time . ".txt";
    } elseif ($file == "post_commande.php") {
        $nomFichier = "../assets/commandes/Commande n" . ($maxId + 1) . "_" . $date . "-" . $time . ".txt";
    }
    $fichier = fopen($nomFichier, "c+b");
    if (!$fichier) {
        echo "Erreur lors de l'ouverture du fichier.";
        exit;
    }
    if ($file == "post_commande.php") {
        fwrite($fichier, "\nPlat : " . $plat->libelle);
        fwrite($fichier, "\nPrix total : " . $plat->prix * $quantite);
    }
    fwrite($fichier, "\nPrénom : " . $_POST["prenom"]);
    fwrite($fichier, "\nNom : " . $_POST["nom"]);
    fwrite($fichier, "\nEmail : " . $_POST["email"]);
    fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
    if ($file == "post_contact.php") {
        fwrite($fichier, "\nDemande : " . $_POST["demande"]);
    } elseif ($file == "post_commande.php") {
        fwrite($fichier, "\nAdresse : " . $_POST["numero"] . $_POST["rue"] . $_POST["code_postal"] . $_POST["ville"]);
    }
endif;
?>