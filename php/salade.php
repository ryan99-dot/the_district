<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salade - The District</title>
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
            <div id="entete_salade" class="rounded-bottom-5"></div>
            <h1 id="salade" class="z-3 position-absolute">Salade</h1>
        </div>
    </header>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/salade_ceasar.jpg" alt="Salade Caesar" class="object-fit-cover" id="salade_caesar">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Salade Caesar</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Salade, poulet grillé, tomates cerises, croûtons et sauce
                    Caesar</p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../images/food/salade_poulet.png" alt="Salade" class="object-fit-cover bg-secondary">
        <div class="tout d-flex">
            <p class="titre_plat text-center">Salade au poulet</p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center fs-2">Salade, poulet grillé, concombre, maïs, tomates
                    cerises
                    et vinaigrette</p>
                <a href="commande.php"><button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button></a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent"><i class="fa-solid fa-chevron-left"></i></button>
    </div>
    <div id="separation_ass"></div>
    <?php require_once(__DIR__ . "/footer.php"); ?>

    <script src="../javascript/menu_burger.js"></script>
    <script src="../javascript/plats.js"></script>
</body>

</html>