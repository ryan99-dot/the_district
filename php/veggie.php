<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie - The District</title>
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
        <div id="entete_ass"></div>
        <div id="banniere_mobile"></div>
        <div class="d-flex justify-content-center align-items-center">
            <div id="entete_veggie" class="rounded-bottom-5"></div>
            <h1 id="veggie" class="z-3 position-absolute">Veggie</h1>
        </div>
    </header>

    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/spaghetti_legumes.jpg" alt="Spaghetti aux légumes" id="spa_leg" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Spaghetti aux légumes</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Spaghettis, poivrons,sauce tomate et oignons</p>
                <a href="commande.php">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>

    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/pizza_margherita.jpg" alt="Pizza margherita" id="margherita" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Pizza margherita</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Sauce tomate, mozzarella, tomates et basilic</p>
                <a href="commande.php">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>

    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/grilled_cheese.jpg" alt="Grilled cheese" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Grilled cheese</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs2">Pain de mie toasté, fromages et moutarde américaine</p>
                <a href="commande.php">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>

    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/courgettes_farcies.jpg" alt="Courgettes farcies" id="courgettes" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Courgettes farcies veggie</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Courgettes, riz, haché végétal et champignons</p>
                <a href="commande.php">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>

    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/tarte_veggie.jpg" alt="Tarte veggie" id="tarte" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Tarte veggie</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Crème fraîche, épinards et jeunes pousses</p>
                <a href="commande.php">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>

    <div id="separation_ass"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../assets/javascript/menu_burger.js"></script>
    <script src="../assets/javascript/plats.js"></script>
</body>

</html>