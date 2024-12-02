<?php
require_once(__DIR__ . "/php/DAO.php");
$dao = new DAO();
$cat = $dao->getCategories();
$plat = $dao->getRandomPlats(6);
$searchTerm = $_GET["recherche"] ?? "";
$resultats = $dao->searchPlats($searchTerm);
require_once(__DIR__ . "/php/header.php");

if (!empty($_GET['recherche'])): ?>
    <section>
        <h2 class="my-5" id="titre_recherche">Résultats pour <?= htmlspecialchars($_GET['recherche']) ?></h2>
        <svg viewBox="40 0 500 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="monDegrade">
                    <stop offset="20%" stop-color="rgba(0,0,0,60%)" />
                    <stop offset="60%" stop-color="rgba(0,0,0,40%)" />
                    <stop offset="100%" stop-color="rgba(0,0,0,0%)" />
                </radialGradient>
            </defs>
            <ellipse cx="100" cy="50" rx="300" ry="35" fill="url('#monDegrade')" />
        </svg>
        <div id="resultats_recherche" class="d-flex flex-wrap">
            <?php if (count($resultats) > 0):
                foreach ($resultats as $resultat): ?>
                    <div class="plat d-flex align-items-center justify-content-between">
                        <img src="assets/images/food/<?= $resultat->image ?>" alt="<?= $resultat->libelle ?>" class="object-fit-cover" id="plat<?= $resultat->id_plat ?>">
                        <div class="tout d-flex">
                            <p class="titre_plat"><?= $resultat->libelle ?></p>
                            <hr class="shadow">
                            <button class="chevron open border-0 bg-transparent">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                            <div class="des_com flex-column align-items-center">
                                <p class="description"><?= $resultat->description ?></p>
                                <p class="description text-center"><?= $resultat->prix ?>€</p>
                                <a href="php/commande.php?id=<?= $resultat->id_plat ?>">
                                    <button class="commander border-0 rounded-2 px-5">Commander</button>
                                    <button class="commander_mobile border-0 rounded-circle px-2">+</button>
                                </a>
                            </div>
                        </div>
                        <button class="chevron closed border-0 bg-transparent">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>
                <?php endforeach;
            else : ?>
                <p>Aucun résultat trouvé pour cette recherche.</p>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>

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
            <?php for ($i = 0; $i < count($cat); $i += 1): ?>
                <?php if ($i % 2 == 0): ?>
                    <a href="php/plats_categorie.php?id=<?= $cat[$i]->id ?>" class="up" id="<?= $cat[$i]->libelle ?>">
                        <p class="align-items-center justify-content-center">
                            <?= $cat[$i]->libelle ?></p>
                    </a>
                <?php else: ?>
                    <a href="php/plats_categorie.php?id=<?= $cat[$i]->id ?>" class="down" id="<?= $cat[$i]->libelle ?>">
                        <p class="align-items-center justify-content-center">
                            <?= $cat[$i]->libelle ?></p>
                    </a>
            <?php endif;
            endfor; ?>
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
            <?php for ($i = 0; $i < count($plat); $i += 1): ?>
                <a href="php/plats_categorie.php?id=<?= $plat[$i]->id_categorie ?>#plat<?= $plat[$i]->id ?>">
                    <img src="assets/images/food/<?= $plat[$i]->image ?>" alt="<?= $plat[$i]->libelle ?>" class="object-fit-cover" id="plat_jour<?= $i + 1 ?>">
                </a>
            <?php endfor; ?>
        </div>
    </section>

<?php endif; ?>

<div id="separation_ass"></div>

<?php require_once(__DIR__ . "/php/footer.php"); ?>

<script src="assets/javascript/menu_burger.js"></script>
<script src="assets/javascript/plats.js"></script>
</body>

</html>