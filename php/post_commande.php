<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande envoyée - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/pages.css">
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
    $num_commande = 0;
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo ("<h3>Il faut un email valide pour confirmer la commande.</h3><br>");
    }
    if (!preg_match('/^0\d{9}$/', $_POST["telephone"])) {
        echo ("<h3>Il faut un numéro de téléphone valide pour confirmer la commande.</h3><br>");
    }
    if (!preg_match('/^\d+[\wÀ-ÿ\s-]*$/', $_POST["numero"])) {
        echo ("<h3>Il faut un numéro de logement valide pour confirmer la commande.</h3><br>");
    }
    if (!preg_match('/^\d{5}$/', $_POST["code_postal"])) {
        echo ("<h3>Il faut un numéro de code postal valide pour confirmer la commande.</h3><br>");
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !preg_match('/^0\d{9}$/', $_POST["telephone"]) || !preg_match('/^\d+[\wÀ-ÿ\s-]*$/', $_POST["numero"]) || !preg_match('/^\d{5}$/', $_POST["code_postal"])) {
        echo ('<div class="d-flex justify-content-center mt-5">
            <button class="border-0 rounded-4" id="retour_form">
                <a href="commande.php" class="text-decoration-none text-dark fs-2">Retour au panier</a>
            </button>
        </div>');
    } 
    else {
        echo ('<div id="recap_form">
            <h2 class="my-5 text-center">Votre commande a été transmise avec succès !</h2>
            <h3 class="ms-4">Récapulatif de votre commande :</h3>
            <ul id="liste_recap_form" class="ms-5">
                <li>Votre prénom : ' . strip_tags($_POST["prenom"]) . '</li>
                <li>Votre nom : ' . strip_tags($_POST["nom"]) . '</li>
                <li>Votre email : ' . strip_tags($_POST["email"]) . '</li>
                <li>Votre téléphone : ' . strip_tags($_POST["telephone"]) . '</li>
                <li>Votre adresse : ' . strip_tags($_POST["numero"] . " " . $_POST["rue"] . ", " . $_POST["code_postal"] . " " . $_POST["ville"]) . '</li>
            </ul>
        </div>');
        date_default_timezone_set("Europe/Paris");
        $date = date("d-m-Y");
        $time = date("H-i-s");
        echo $num_commande;
        $num_commande = +1;
        $fichier = fopen("Commande n°" . $num_commande . "_" . $date . "-" . $time . ".txt", "c+b");
        fwrite($fichier, "\nPrénom : " . $_POST["prenom"]);
        fwrite($fichier, "\nNom : " . $_POST["nom"]);
        fwrite($fichier, "\nEmail : " . $_POST["email"]);
        fwrite($fichier, "\nTéléphone : " . $_POST["telephone"]);
        fwrite($fichier, "\nAdresse : " . $_POST["numero"] . $_POST["rue"] . ", " . $_POST["code_postal"] . $_POST["ville"]);
        echo $num_commande;
    }
    ?>

    <div id="separation_tab"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../assets/javascript/menu_burger.js"></script>
</body>

</html>