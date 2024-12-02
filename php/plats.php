<?php
require_once(__DIR__ . "/DAO.php");
$dao = new DAO();
$page = $_GET['page'] ?? 1;
$plats = $dao->getPlatPage($page, 4);
require_once(__DIR__ . "/header.php");

foreach ($plats as $plat) : ?>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/<?= $plat->image ?>" alt="<?= $plat->libelle ?>" class="object-fit-cover" id="plat<?= $plat->id_plat ?>">
        <div class="tout d-flex">
            <p class="titre_plat"><?= $plat->libelle ?></p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description"><?= $plat->description ?></p>
                <p class="description text-center"><?= $plat->prix ?>€</p>
                <a href="commande.php?id=<?= $plat->id_plat ?>">
                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                </a>
            </div>
        </div>
        <button class="chevron closed border-0 bg-transparent">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
    </div>
<?php endforeach; ?>

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
    <button class="prec_desktop border-0 px-5 py-4 rounded-5">
        <a href="?page=<?php if ($page == 1) {
                            $p = 5;
                        } else {
                            $p = $page - 1;
                        }
                        echo $p; ?>" class="text-decoration-none text-dark">Précédent</a>
    </button>
    <button class="prec_mobile border-0 bg-transparent">
        <a href="?page=<?php if ($page == 1) {
                            $p = 5;
                        } else {
                            $p = $page - 1;
                        }
                        echo $p; ?>" class="text-decoration-none text-dark">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </button>
    <button class="suiv_desktop border-0 px-5 py-4 rounded-5">
        <a href="?page=<?php if ($page == 5) {
                            $p = 1;
                        } else {
                            $p = $page + 1;
                        }
                        echo $p; ?>" class="text-decoration-none text-dark">Suivant</a>
    </button>
    <button class="suiv_mobile border-0 bg-transparent">
        <a href="?page=<?php if ($page == 5) {
                            $p = 1;
                        } else {
                            $p = $page + 1;
                        }
                        echo $p; ?>" class="text-decoration-none text-dark">
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </button>
</div>

<div id="separation_ass"></div>

<?php require_once(__DIR__ . "/footer.php"); ?>

<script src="../assets/javascript/menu_burger.js"></script>
<script src="../assets/javascript/plats.js"></script>
</body>

</html>