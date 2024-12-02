<?php
$path = $_SERVER["PHP_SELF"];
$file = basename($path);

// Définir le titre selon la page courante
if ($file == "plats.php") {
    // Récupération du numéro de page
    $page = $_GET['page'];
    $title = "Plats - Page $page - The District";
} elseif ($file == "plats_categorie.php") {
    require_once(__DIR__ . "/DAO.php");
    $dao = new DAO();
    if (isset($_GET['id'])) {
        $cat = $dao->getCategories();
    }
    // Chercher l'élément avec l'ID correspondant
    $idRecherche = $_GET['id']; // L'ID que vous cherchez dans le tableau
    $libelle = null; // Par défaut, aucun libellé trouvé

    if (!empty($cat) && is_array($cat)) {
        foreach ($cat as $c) {
            if ($c->id == $idRecherche) {
                $libelle = $c->libelle;
                break; // Arrête la recherche dès qu'on trouve l'élément
            }
        }
    }

    // Définir le titre, en fonction du libellé trouvé
    if ($libelle !== null) {
        $title = "$libelle - The District";
    } else {
        $title = "Catégorie inconnue - The District"; // Gestion si aucun élément trouvé
    }
} else {
    // Autres titres pour d'autres pages
    $titles = [
        "index.php" => "Accueil - The District",
        "categorie.php" => "Catégories - The District",
        "contact.php" => "Contact - The District",
        "commande.php" => "Commande - The District",
        "politique_de_confidentialite.php" => "Politique de confidentialité - The District",
        "mentions_legales.php" => "Mentions légales - The District",
        "post_commande.php" => "Récap commande - The District",
        "post_contact.php" => "Récap demande - The District"
    ];
    $title = $titles[$file];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://kit.fontawesome.com/694d251a11.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $file == 'index.php' ? 'assets/css/index.css' : '../assets/css/pages.css' ?>">
    <link rel="stylesheet" href="<?= $file == 'index.php' ? 'assets/css/all.css' : '../assets/css/all.css' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dekko&family=Farsan&family=Geostar+Fill&family=Graduate&family=Griffy&family=Gwendolyn:wght@400;700&family=Indie+Flower&family=Julius+Sans+One&family=Love+Light&family=Mina:wght@400;700&family=Modern+Antiqua&family=Norican&family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between p-0 shadow">
            <!-- Logos -->
            <img src="../assets/images/the_district_brand/logo_transparent.png" alt="Logo The District" id="logo_desktop">
            <img src="../assets/images/the_district_brand/logo.png" alt="Logo The District" id="logo_mobile">

            <!-- Navigation principale -->
            <ul class="navbar-nav col justify-content-around">

                <!-- Accueil -->
                <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                    <a href="<?= $file == 'index.php' ? 'index.php' : '../index.php' ?>" class="nav-link <?= $file == 'index.php' ? 'active text-white text-decoration-underline' : '' ?> fs-4">Accueil</a>
                </li>

                <!-- Catégories -->
                <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                    <a href="<?= $file == 'index.php' ? 'php/categorie.php' : 'categorie.php' ?>" class="nav-link <?= $file == 'categorie.php' ? 'active text-white text-decoration-underline' : '' ?> fs-4">Catégories</a>
                </li>

                <!-- Plats -->
                <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                    <a href="<?= $file == 'index.php' ? 'php/plats.php?page=1' : 'plats.php?page=1' ?>" class="nav-link <?= $file == 'plats.php' ? 'active text-white text-decoration-underline' : '' ?> fs-4">Plats</a>
                </li>

                <!-- Contact -->
                <li class="nav-item d-flex justify-content-center align-items-center">
                    <a href="<?= $file == 'index.php' ? 'php/contact.php' : 'contact.php' ?>" class="nav-link <?= $file == 'contact.php' ? 'active text-white text-decoration-underline' : '' ?> fs-4">Contact</a>
                </li>
            </ul>

            <!-- Image supplémentaire -->
            <img id="img_nav" src="../assets/images/bg_rd.png" alt="Plusieurs plats sur fond bleu">



            <!-- Sidenav -->
            <div id="mySidenav" class="sidenav">
                <div class="d-flex justify-content-between align-items-center mx-5">
                    <a href="<?= $file == 'index.php' ? 'php/commande.php' : 'commande.php' ?>">
                        <i class="fa-solid fa-basket-shopping fs-1"></i>
                    </a>
                    <a id="closeBtn" href="#" class="close">×</a>
                </div>
                <!-- Liens du sidenav -->
                <ul>
                    <li><a href="<?= $file == 'index.php' ? 'index.php' : '../index.php' ?>">Accueil</a></li>
                    <li><a href="<?= $file == 'index.php' ? 'php/categorie.php' : 'categorie.php' ?>">Catégories</a></li>
                    <li><a href="<?= $file == 'index.php' ? 'php/plats.php?page=1.php' : 'plats.php?page=1.php' ?>">Plats</a></li>
                    <li><a href="<?= $file == 'index.php' ? 'php/contact.php' : 'contact.php' ?>">Contact</a></li>
                </ul>


                <!-- Réseaux sociaux -->
                <div id="reseaux_mobile" class="d-flex justify-content-around mt-4">
                    <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

                <!--Politique de confidentialité et mentions légales-->
                <div id="pol_mention" class="d-flex justify-content-around mt-3">
                    <a href="<?= $file == 'index.php' ? 'php/politique_de_confidentialite.php' : 'politique_de_confidentialite.php' ?>" class="text-decoration-none text-center fs-5">Politique de confidentialité</a>
                    <a href="<?= $file == 'index.php' ? 'php/mentions_legales.php' : 'mentions_legales.php' ?>" class="text-decoration-none fs-5">Mentions légales</a>
                </div>
            </div>

            <!-- Burger menu -->
            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </nav>

        <!-- Entête des pages -->
        <?php if ($file == "index.php") : ?>
            <video id="background_video" autoplay loop muted>
                <source src="../assets/videos/Food Reel FH Studio.mp4#t=3">
            </video>
            <form action="" method="get" id="champ_recherche" class="justify-content-center align-items-end">
                <label for="recherche"></label>
                <input type="search" id="recherche" name="recherche" placeholder="Recherche..." class="border-0 rounded-5 text-center position-relative fs-4">
            </form>

        <?php elseif ($file == "categorie.php") : ?>
            <div id="entete_leg"></div>

        <?php elseif ($file == "plats.php" || $file == "plats_categorie.php") : ?>
            <div id="entete_ass"></div>

        <?php elseif ($file == "contact.php" || $file == "commande.php" || $file == "post_commande.php" || $file == "post_contact.php" || $file == "politique_de_confidentialite.php" || $file == "mentions_legales.php") : ?>
            <div id="entete_tab" class="justify-content-center">
                <?php if ($file == "contact.php") : ?>
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
                <?php elseif ($file == "politique_de_confidentialite.php") : ?>
                    <h1 id="pol" class="position-absolute px-5 z-1">Politique de confidentialité</h1>
                    <svg viewBox="0 -20 200 100" xmlns="http://www.w3.org/2000/svg" class="position-absolute" id="svg_pol">
                        <defs>
                            <radialGradient id="monDegrade">
                                <stop offset="80%" stop-color="rgba(255,255,255,40%)" />
                                <stop offset="100%" stop-color="rgba(255,255,255,0%)" />
                            </radialGradient>
                        </defs>
                        <ellipse cx="100" cy="20" rx="210" ry="45" fill="url('#monDegrade')" />
                    </svg>
                <?php elseif ($file == "mentions_legales.php") : ?>
                    <h1 id="men" class="position-absolute px-5 z-1">Mentions légales</h1>
                    <svg viewBox="0 -20 200 100" xmlns="http://www.w3.org/2000/svg" class="position-absolute" id="svg_men">
                        <defs>
                            <radialGradient id="monDegrade">
                                <stop offset="80%" stop-color="rgba(255,255,255,40%)" />
                                <stop offset="100%" stop-color="rgba(255,255,255,0%)" />
                            </radialGradient>
                        </defs>
                        <ellipse cx="100" cy="20" rx="130" ry="45" fill="url('#monDegrade')" />
                    </svg>
                <?php endif; ?>
            </div>

        <?php endif; ?>

        <div id="banniere_mobile"></div>
        <?php if ($file == "contact.php") : ?>
            <div id="entete_contact">
                <h1>Contact</h1>
            <?php elseif ($file == "plats_categorie.php") : ?>
                <div class="d-flex justify-content-center align-items-center">
                    <div id="entete_<?= $plats[0]->nom_cat ?>" class="rounded-bottom-5 shadow"></div>
                    <h1 id="<?= $plats[0]->nom_cat ?>" class="z-3 position-absolute"><?= $plats[0]->nom_cat ?></h1>
                </div>
            <?php elseif ($file == "politique_de_confidentialite.php") : ?>
                <div id="entete_pol">
                    <h1 class="text-center">Politique de confidentialité</h1>
                <?php elseif ($file == "mentions_legales.php") : ?>
                    <div id="entete_mentions">
                        <h1 class="text-center">Mentions légales</h1>
                    <?php endif; ?>

    </header>