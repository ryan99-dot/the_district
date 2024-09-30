<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - The District</title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geostar+Fill&family=Graduate&family=Griffy&family=Indie+Flower&family=Julius+Sans+One&family=Love+Light&family=Mina:wght@400;700&family=Norican&family=Nothing+You+Could+Do&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dekko&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <?php require_once(__DIR__ . "/nav.php"); ?>

        <video id="background-video" autoplay loop muted>
            <source src="../Food Reel FH Studio.mp4#t=3">
        </video>

        <div id="champ_recherche" class="justify-content-center align-items-end">
            <label for="recherche"></label>
            <input type="search" id="recherche" name="recherche" placeholder="Recherche..."
                class="border-0 rounded-5 text-center position-relative fs-4">
        </div>
        <div id="banniere_mobile"></div>
    </header>
    <section>
        <h2 class="my-5" id="titre_cat">Catégories</h2>
        <svg viewBox="40 0 500 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="monDegrade">
                    <stop offset="20%" stop-color="rgba(0,0,0,60%)" />
                    <stop offset="60%" stop-color="rgba(0,0,0,40%)" />
                    <stop offset="100%" stop-color="rgba(0,0,0,0%)" />
                </radialGradient>
            </defs>
            <ellipse cx="100" cy="50" rx="200" ry="35" fill="url('#monDegrade')" />
        </svg>
        <div id="categories" class="d-flex">
            <a href="#" class="up" id="asiatique">
                <p class="align-items-center justify-content-center fs-3">Asiatique</p>
            </a>
            <a href="burger.php" class="down" id="burger">
                <p class="align-items-center justify-content-center fs-1">Burger</p>
            </a>
            <a href="pates.php" class="up" id="pates">
                <p class="align-items-center justify-content-center fs-1">Pâtes</p>
            </a>
            <a href="pizza.php" class="down" id="pizza">
                <p class="align-items-center justify-content-center fs-1">Pizza</p>
            </a>
            <a href="salade.php" class="up" id="salade">
                <p class="align-items-center justify-content-center fs-1">Salade</p>
            </a>
            <a href="sandwich.php" class="down" id="sandwich">
                <p class="align-items-center justify-content-center fs-1">Sandwich</p>
            </a>
            <a href="veggie.php" class="up" id="veggie">
                <p class="align-items-center justify-content-center fs-1">Veggie</p>
            </a>
            <a href="wrap.php" class="down" id="wrap">
                <p class="align-items-center justify-content-center fs-1">Wrap</p>
            </a>
        </div>
    </section>
    <div id="separation_leg" class="my-5"></div>
    <section>
        <h2 class="my-5" id="titre_plat">Plats du jour</h2>
        <svg viewBox="40 0 500 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="monDegrade">
                    <stop offset="20%" stop-color="rgba(0,0,0,60%)" />
                    <stop offset="60%" stop-color="rgba(0,0,0,40%)" />
                    <stop offset="100%" stop-color="rgba(0,0,0,0%)" />
                </radialGradient>
            </defs>
            <ellipse cx="100" cy="50" rx="200" ry="35" fill="url('#monDegrade')" />
        </svg>
        <div id="plats" class="my-1">
            <a href="plats2.php#margherita"><img src="../images/food/pizza_margherita.jpg" alt="Pizza marhgerita"
                    class="object-fit-cover" id="plat1"></a>
            <a href="plats1.php#bacon_cheeseburger"><img src="../images/food/bacon_cheeseburger.jpg" alt="Hamburger"
                    class=" object-fit-cover" id="plat2"></a>
            <a href="plats2.php#spa_leg"><img src="../images/food/spaghetti_legumes.jpg" alt="Spaghetti aux légumes"
                    class=" object-fit-cover" id="plat3"></a>
            <a href="plats4.php#tarte"><img src="../images/food/tarte_veggie.jpg" alt="Tarte veggie"
                    class=" object-fit-cover" id="plat4"></a>
            <a href="plats2.php#lasagnes"><img src="../images/food/lasagnes_viande.jpg" alt="Lasagnes"
                    class=" object-fit-cover" id="plat5"></a>
            <a href="plats5.php#wrap_caesar"><img src="../images/food/wrap_caesar.jpg" alt="Wrap Ceasar"
                    class="object-fit-cover" id="plat6"></a>
        </div>
    </section>
    <div id="separation_ass"></div>

    <div id="parallaxe" class="mb-5"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="../javascript/script.js"></script>
</body>

</html>