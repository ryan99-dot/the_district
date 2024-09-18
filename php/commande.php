<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/pages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Farsan&family=Gwendolyn:wght@400;700&family=Julius+Sans+One&family=Mina:wght@400;700&family=Modern+Antiqua&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
    <?php require_once(__DIR__ . "/nav.php"); ?>
        <div id="entete_tab"></div>
        <div id="banniere_mobile"></div>
    </header>
    <form id="commande" method="get" class="d-flex flex-wrap justify-content-around mt-5">
        <div class="plats_commande d-flex">
            <img src="../images/food/big_burger.jpeg" alt="Big Burger" class="object-fit-cover">
            <div class="recap_com d-flex flex-column justify-content-between bg-transparent">
                <div class=" titre_des bg-transparent d-flex justify-content-between align-items-center">
                    <p class="titre_plat text-center">Big burger</p>
                    <hr class="shadow">
                    <p class="description text-center fs-2">2 steaks, 2 tranches de cheddar, salade, tomate,
                        oignons cuits et mayonnaise</p>
                </div>
                <div class="qt_plat d-flex align-items-center justify-content-between rounded-5">
                    <label for="quantite" class="label_qtt fs-1">Quantité</label>
                    <div class="nbr_qt bg-transparent">
                        <button class="moins border-0 fs-1">-</button>
                        <input type="number" id="quantite" value="1"
                            class="bg-transparent border-0 fs-1 text-center">
                        <button class="plus border-0 fs-1">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="champ d-flex mb-5">
            <label for="prenom" class="obligatoire fs-2">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="nom" class="obligatoire fs-2">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="email" class="obligatoire fs-2">Email</label>
            <input type="text" name="email" id="email" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5">
            <label for="telephone" class="obligatoire fs-2">Téléphone</label>
            <input type="text" name="telphone" id="telephone" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5" id="champ_num">
            <label for="numero" class="obligatoire fs-2">N°</label>
            <input type="text" name="numero" id="numero" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5" id="champ_rue">
            <label for="rue" class="obligatoire fs-2">Rue</label>
            <input type="text" name="rue" id="rue" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5" id="champ_cp">
            <label for="code_postal" class="obligatoire fs-2">Code postal</label>
            <input type="text" name="code_postal" id="code_postal" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <div class="champ d-flex mb-5" id="champ_ville">
            <label for="ville" class="obligatoire fs-2">Ville</label>
            <input type="text" name="ville" id="ville" placeholder="Champ obligatoire"
                class="px-4 fs-4" required>
        </div>
        <p id="champ_obligatoire">* Champs obligatoires</p>
        <input type="submit" value="Envoyer" id="bouton" class="fs-2 border-0 rounded-4 my-5" onclick="verif_commande()">
        <button type="submit" id="envoi_mobile" class="border-0 rounded-circle align-items-center justify-content-center mb-3" onclick="verif_commande()"><i class="fa-regular fa-paper-plane"></i></button>
    </form>
    <div id="separation_tab"></div>
    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/script.js"></script>
</body>

</html>