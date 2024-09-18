<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/pages.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Farsan&family=Gwendolyn:wght@400;700&family=Julius+Sans+One&family=Modern+Antiqua&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once(__DIR__ . "/nav.php"); ?>
        <div id="entete_ass"></div>
        <div id="banniere_mobile"></div>
    </header>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/lasagnes_viande.jpg" alt="Lasagnes" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Lasagnes</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Pâtes lasagne, viande hachée, sauce tomate, béchamel,
                    oignons, carottes et fromages</p>
                <a href="commande.html"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/spaghetti_legumes.jpg" alt="Spaghetti aux légumes" id="spa_leg"
            class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Spaghetti aux légumes</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Spaghettis, poivrons,sauce tomate et oignons</p>
                <a href="commande.html"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/tagliatelles_saumon.webp" alt="Tagliatelles au saumon" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Tagliatelles au saumon</p>
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Tagliatelles, saumon et crème fraîche</p>
                <a href="commande.html"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/pizza_margherita.jpg" alt="Pizza margherita" id="margherita" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Pizza margherita</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Sauce tomate, mozzarella, tomates et basilic</p>
                <a href="commande.html"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div id="boutons" class="d-flex justify-content-around my-5">
        <svg viewBox="0 -20 200 100" xmlns="http://www.w3.org/2000/svg" class="position-absolute">
            <defs>
                <radialGradient id="monDegrade">
                    <stop offset="50%" stop-color="rgba(151, 7, 71,40%)" />
                    <stop offset="100%" stop-color="rgba(151,7,71,0%)" />
                </radialGradient>
            </defs>
            <ellipse cx="100" cy="38" rx="200" ry="45" fill="url('#monDegrade')" />
        </svg>
    <button class="prec_desktop border-0 px-5 py-4 rounded-5"><a href="plats1.html" class="text-decoration-none text-dark">Précédent</a></button>
    <button class="prec_mobile border-0 bg-transparent"><a href="plats1.html" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-left"></i></a></button>
    <button class="suiv_desktop border-0 px-5 py-4 rounded-5"><a href="plats3.html" class="text-decoration-none text-dark">Suivant</a></button>
    <button class="suiv_mobile border-0 bg-transparent"><a href="plats3.html" class="text-decoration-none text-dark"><i class="fa-solid fa-arrow-right"></i></a></button>
    </div>
    <div id="separation_ass"></div>
    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/script.js"></script>
</body>

</html>