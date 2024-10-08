<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie - The District</title>
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
        <div id="entete_leg"></div>
        <div id="banniere_mobile"></div>
    </header>

    <a href="#" class="text-decoration-none">
        <div id="asiatique" class="categorie_l d-flex mt-5">
            <img src="../images/category/asian_food_cat.jpg" alt="Asiatique" class="photo_cat object-fit-cover">
            <p class="texte_cat d-flex justify-content-center align-items-center">Asiatique</p>
        </div>
    </a>

    <a href="burger.php" class="text-decoration-none">
        <div id="burger" class="categorie_r d-flex mt-5">
            <p class="texte_cat d-flex justify-content-center align-items-center">Burger</p>
            <img src="../images/category/burger_cat.jpg" alt="Burger" class="photo_cat object-fit-cover">
        </div>
    </a>

    <a href="pates.php" class="text-decoration-none">
        <div id="pates" class="categorie_l d-flex mt-5">
            <img src="../images/category/pasta_cat.jpg" alt="Pâtes" class="photo_cat object-fit-cover">
            <p class="texte_cat d-flex justify-content-center align-items-center">Pâtes</p>
        </div>
    </a>

    <a href="pizza.php" class="text-decoration-none">
        <div id="pizza" class="categorie_r d-flex mt-5">
            <p class="texte_cat d-flex justify-content-center align-items-center">Pizza</p>
            <img src="../images/category/pizza_cat.jpg" alt="Pizza" class="photo_cat object-fit-cover">
        </div>
    </a>

    <a href="salade.php" class="text-decoration-none">
        <div id="salade" class="categorie_l d-flex mt-5">
            <img src="../images/category/salade_cat.jpg" alt="Salade" class="photo_cat object-fit-cover">
            <p class="texte_cat d-flex justify-content-center align-items-center">Salade</p>
        </div>
    </a>

    <a href="sandwich.php" class="text-decoration-none">
        <div id="sandwich" class="categorie_r d-flex mt-5">
            <p class="texte_cat d-flex justify-content-center align-items-center">Sandwich</p>
            <img src="../images/category/sandwich_cat.jpg" alt="Sandwich" class="photo_cat object-fit-cover">
        </div>
    </a>

    <a href="veggie.php" class="text-decoration-none">
        <div id="veggie" class="categorie_l d-flex mt-5">
            <img src="../images/category/veggie_cat.jpg" alt="Veggie" class="photo_cat object-fit-cover">
            <p class="texte_cat d-flex justify-content-center align-items-center">Veggie</p>
        </div>
    </a>

    <a href="wrap.php" class="text-decoration-none">
        <div id="wrap" class="categorie_r d-flex mt-5">
            <p class="texte_cat d-flex justify-content-center align-items-center">Wrap</p>
            <img src="../images/category/wrap_cat.jpg" alt="Wrap" class="photo_cat object-fit-cover">
        </div>1
    </a>

    <div id="separation_leg" class="my-5"></div>

    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/menu_burger.js"></script>
</body>

</html>