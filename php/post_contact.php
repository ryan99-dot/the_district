<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande envoyée - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/pages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dekko&family=Farsan&family=Geostar+Fill&family=Graduate&family=Griffy&family=Gwendolyn:wght@400;700&family=Indie+Flower&family=Julius+Sans+One&family=Love+Light&family=Mina:wght@400;700&family=Modern+Antiqua&family=Norican&family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
</head>



<body>
    <header>
        <?php require_once(__DIR__ . "/nav.php"); ?>
        <div id="entete_tab" class="justify-content-center"></div>
        <div id="banniere_mobile"></div>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo ("<h3>Il faut un email valide pour soumettre le formulaire.</h3><br>");
    }
    if (!preg_match('/^0\d{9}$/', $_POST["telephone"])) {
        echo ("<h3>Il faut un numéro de téléphone valide pour soumettre le formulaire.</h3><br>");
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !preg_match('/^0\d{9}$/', $_POST["telephone"])) {
        echo ('<div class="d-flex justify-content-center mt-5"><button class="border-0 rounded-4" id="retour_form"><a href="contact.php" class="text-decoration-none text-dark fs-2">Retour au formulaire</a></button></div>');
    } 
    else {
        echo ('<div id="recap_form">
            <h2 class="my-5 text-center">Votre demande a été envoyée avec succès !</h2>
            <h3 class="ms-4">Récapulatif de votre demande :</h3>
            <ul id="liste_recap_form" class="ms-5">
                <li>Votre prénom : ' . strip_tags($_POST["prenom"]) . '</li>
                <li>Votre nom : ' . strip_tags($_POST["nom"]) . '</li>
                <li>Votre email : ' . strip_tags($_POST["email"]) . '</li>
                <li>Votre téléphone : ' . strip_tags($_POST["telephone"]) . '</li>
                <li>Votre demande : ' . strip_tags($_POST["demande"]) . '</li>
            </ul>
        </div>');
        date_default_timezone_set("Europe/Paris");
        $date = date("d-m-Y");
        $time = date("H-i-s");
        $fichier = fopen($date . "-" . $time . ".txt", "c+b");
        fwrite($fichier, "Prénom : " . $_POST["prenom"]);
        fwrite($fichier, "\nNom : " . $_POST["nom"]);
        fwrite($fichier, "\nEmail : " . $_POST["email"]);
        fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
        fwrite($fichier, "\nDemande : " . $_POST["demande"]);
    }
    ?>

    <div id="separation_tab"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/menu_burger.js"></script>
</body>

</html>