
        <?php require_once(__DIR__ . "/header.php"); ?>


    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) : ?>
        <h3>Il faut un email valide pour soumettre le formulaire.</h3><br>
        <?php endif; ?>
    <?php if (!preg_match('/^0\d{9}$/', $_POST["telephone"])) : ?>
        <h3>Il faut un numéro de téléphone valide pour soumettre le formulaire.</h3><br>
    <?php endif; ?>
    <?php if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !preg_match('/^0\d{9}$/', $_POST["telephone"])) : ?>
        <div class="d-flex justify-content-center mt-5"><button class="border-0 rounded-4" id="retour_form"><a href="contact.php" class="text-decoration-none text-dark fs-2">Retour au formulaire</a></button></div>
    <?php else : ?>
        <div id="recap_form">
            <h2 class="my-5 text-center">Votre demande a été envoyée avec succès !</h2>
            <h3 class="ms-4">Récapulatif de votre demande :</h3>
            <ul id="liste_recap_form" class="ms-5">
                <li>Votre prénom : ' . strip_tags($_POST["prenom"]) . '</li>
                <li>Votre nom : ' . strip_tags($_POST["nom"]) . '</li>
                <li>Votre email : ' . strip_tags($_POST["email"]) . '</li>
                <li>Votre téléphone : ' . strip_tags($_POST["telephone"]) . '</li>
                <li>Votre demande : ' . strip_tags($_POST["demande"]) . '</li>
            </ul>
        </div>
        <?php date_default_timezone_set("Europe/Paris");
        $date = date("d-m-Y");
        $time = date("H-i-s");
        $fichier = fopen("../assets/contact/Demande du " . $date . "-" . $time . ".txt", "c+b");
        fwrite($fichier, "Prénom : " . $_POST["prenom"]);
        fwrite($fichier, "\nNom : " . $_POST["nom"]);
        fwrite($fichier, "\nEmail : " . $_POST["email"]);
        fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
        fwrite($fichier, "\nDemande : " . $_POST["demande"]);
    endif; 
    require_once(__DIR__ . "/footer.php"); ?>