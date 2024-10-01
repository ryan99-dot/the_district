<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger - The District</title>
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
        <div id="entete_ass"></div>
        <div id="banniere_mobile"></div>
        <div class="d-flex justify-content-center align-items-center">
            <div id="entete_burger" class="rounded-bottom-5 shadow"></div>
            <h1 id="burger" class="z-3 position-absolute">Burger</h1>
        </div>
    </header>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/big_burger.jpeg" alt="Big Burger" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Big burger</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">2 steaks, 2 tranches de cheddar, salade, tomate, oignons
                    cuits et mayonnaise</p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/burger_gourmet.jpg" alt="Burger Gourmet" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Burger gourmet</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Bun brioché, steak façon bouchère, salade, cornichon,
                    oignons caramélisés et sauce burger</p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/cheesburger.jpg" alt="Cheeseburger" id="cheeseburger" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Cheeseburger</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Bun brioché, steak façon bouchère, 2 tranches de cheddar,
                    bacon et sauce BBQ</p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/bacon_cheeseburger.jpg" alt="Bacon Cheeseburger" class="object-fit-cover">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Bacon cheeseburger</p>
            <hr class="shadow">
            <button class="chevron border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Bun brioché, steak, cheddar, salade, tomate et moutarde
                </p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron border-0 bg-transparent d-none"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div id="separation_ass"></div>
    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/script.js"></script>
</body>

</html>