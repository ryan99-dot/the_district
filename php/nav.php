<nav class="navbar navbar-expand-lg sticky-top d-flex justify-content-between p-0 shadow">
    <img src="../images/the_district_brand/logo_transparent.png" alt="Logo The District" id="logo_desktop">
    <img src="../images/the_district_brand/logo.png" alt="Logo The District" id="logo_mobile">
    <ul class="navbar-nav col justify-content-around">

        <?php $path = $_SERVER["PHP_SELF"];
        $file = basename($path);
        if ($file == "index.php") {
            echo ('<li class="nav-item active border-end border-white d-flex justify-content-center align-items-center">
                <a href="index.php" class="nav-link text-white text-decoration-underline fs-4">Accueil</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="categorie.php" class="nav-link text-dark fs-4">Catégories</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="plats1.php" class="nav-link text-dark fs-4">Plats</a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a href="contact.php" class="nav-link text-dark fs-4">Contact</a>
            </li>');
        }
        elseif ($file == "categorie.php") {
            echo ('<li class="nav-item active border-end border-white d-flex justify-content-center align-items-center">
                <a href="index.php" class="nav-link text-dark fs-4">Accueil</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="categorie.php" class="nav-link text-white text-decoration-underline fs-4">Catégories</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="plats1.php" class="nav-link text-dark fs-4">Plats</a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a href="contact.php" class="nav-link text-dark fs-4">Contact</a>
            </li>');
        }
        elseif ($file == "contact.php") {
            echo ('<li class="nav-item active border-end border-white d-flex justify-content-center align-items-center">
                <a href="index.php" class="nav-link text-dark fs-4">Accueil</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="categorie.php" class="nav-link text-dark fs-4">Catégories</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="plats1.php" class="nav-link text-dark fs-4">Plats</a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a href="contact.php" class="nav-link text-white text-decoration-underline fs-4">Contact</a>
            </li>');
        }
        elseif ($file == "plats1.php" || $file == "plats2.php" || $file == "plats3.php" || $file == "plats4.php" || $file == "plats5.php") {
            echo ('<li class="nav-item active border-end border-white d-flex justify-content-center align-items-center">
                <a href="index.php" class="nav-link text-dark fs-4">Accueil</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="categorie.php" class="nav-link text-dark fs-4">Catégories</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="plats1.php" class="nav-link text-white text-decoration-underline fs-4">Plats</a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a href="contact.php" class="nav-link text-dark fs-4">Contact</a>
            </li>');
        }
        else {
            echo ('<li class="nav-item active border-end border-white d-flex justify-content-center align-items-center">
                <a href="index.php" class="nav-link text-dark fs-4">Accueil</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="categorie.php" class="nav-link text-dark fs-4">Catégories</a>
            </li>
            <li class="nav-item border-end border-white d-flex justify-content-center align-items-center">
                <a href="plats1.php" class="nav-link text-dark fs-4">Plats</a>
            </li>
            <li class="nav-item d-flex justify-content-center align-items-center">
                <a href="contact.php" class="nav-link text-dark fs-4">Contact</a>
            </li>');
        }
        ?>

    </ul>
    <a href="commande.php">
        <img id="img_nav" src="../images/bg_rd.png" alt="Plusieurs plats sur fond bleu">
    </a>

    <div id="mySidenav" class="sidenav">
        <div class="d-flex justify-content-between align-items-center mx-5">
            <a href="commande.php">
                <i class="fa-solid fa-basket-shopping fs-1"></i>
            </a>
            <a id="closeBtn" href="#" class="close">×</a>
        </div>
        <ul>
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="categorie.php">Catégories</a>
            </li>
            <li>
                <a href="plats1.php">Plats</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
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
    </div>
    <a href="#" id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
</nav>