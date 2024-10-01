<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande envoyée - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <div id="entete_tab" class="justify-content-center">
            <h1 id="contact" class="position-absolute px-5 z-1">Contact</h1>
            <svg viewBox="0 -20 200 100" xmlns="http://www.w3.org/2000/svg" class="position-absolute">
                <defs>
                    <radialGradient id="monDegrade">
                        <stop offset="80%" stop-color="rgba(255,255,255,40%)" />
                        <stop offset="100%" stop-color="rgba(255,255,255,0%)" />
                    </radialGradient>
                </defs>
                <ellipse cx="100" cy="20" rx="102" ry="45" fill="url('#monDegrade')" />
            </svg>
        </div>
        <div id="banniere_mobile"></div>
        <div id="entete_contact">
            <h1>Contact</h1>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div id="recap_form">
<h2 class="my-5 text-center">Votre demande a été envoyée avec succès !</h2>
<h3 class="ms-4">Récapulatif de votre demande :</h3>
<ul id="liste_recap_form" class="ms-5">
    <li>Votre prénom : <?php echo ($_POST["prenom"]); ?></li>
    <li>Votre nom : <?php echo ($_POST["nom"]); ?></li>
    <li>Votre email : <?php echo ($_POST["email"]); ?></li>
    <li>Votre téléphone : <?php echo ($_POST["telephone"]); ?></li>
    <li>Votre demande : <?php echo ($_POST["demande"]); ?></li>
</ul>
    </div>
    <div id="separation_tab"></div>
    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/script.js"></script>
</body>

</html>






<?php
date_default_timezone_set("Europe/Paris");
$date = date("d-m-Y");
$time = date("H-i-s");
$fichier = fopen($date . "-" . $time . ".txt", "c+b");
fwrite($fichier, "Prénom : " . $_POST["prenom"]);
fwrite($fichier, "\nNom : " . $_POST["nom"]);
fwrite($fichier, "\nEmail : " . $_POST["email"]);
fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
fwrite($fichier, "\nDemande : " . $_POST["demande"]);
?>