<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - The District</title>
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

    <form method="post" action="post_contact.php" enctype="multipart/form-data" class="d-flex flex-wrap justify-content-around">
        <div class="champ d-flex mb-5">
            <label for="prenom" class="fs-2">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire" class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="nom" class="obligatoire fs-2">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Champ obligatoire" class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="email" class="fs-2">Email</label>
            <input type="text" name="email" id="email" placeholder="Champ obligatoire" class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="telephone" class="obligatoire fs-2">Téléphone</label>
            <input type="text" name="telephone" id="telephone" placeholder="Champ obligatoire" class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex flex-column mb-5" id="last">
            <label for="demande" class="fs-2">Votre demande</label>
            <textarea id="demande" name="demande" placeholder="Champ obligatoire" class="px-5 fs-4" required></textarea>
        </div>
        <p id="champ_obligatoire">* Champs obligatoires</p>
        <input type="submit" value="Envoyer" id="bouton" class="fs-2 border-0 rounded-4" onclick="verif_contact()">
        <button type="submit" id="envoi_mobile" class="border-0 rounded-circle align-items-center justify-content-center mb-3" onclick="verif()">
            <i class="fa-regular fa-paper-plane"></i>
        </button>
    </form>

    <div id="separation_tab"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../assets/javascript/menu_burger.js"></script>
    <script src="../assets/javascript/verif_form.js"></script>
</body>

</html>