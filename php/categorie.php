<?php require_once(__DIR__ . "/DAO.php"); 
$dao = new DAO();
$cat = $dao->getCategories();
require_once(__DIR__ . "/header.php");

for ($i = 0; $i < count($cat); $i += 1): 
    if ($i % 2 == 0): ?>
        <a href="plats_categorie.php?id=<?= $cat[$i]->id ?>" class="text-decoration-none">
            <div id="<?= $cat[$i]->libelle ?>" class="categorie_l d-flex mt-5">
                <img src="../assets/images/category/<?= $cat[$i]->image ?>" alt="<?= $cat[$i]->libelle ?>" class="photo_cat object-fit-cover">
                <p class="texte_cat d-flex justify-content-center align-items-center"><?= $cat[$i]->libelle ?></p>
            </div>
        </a>
    <?php else: ?>
        <a href="plats_categorie.php?id=<?= $cat[$i]->id ?>" class="text-decoration-none">
            <div id="<?= $cat[$i]->libelle ?>" class="categorie_r d-flex mt-5">
                <p class="texte_cat d-flex justify-content-center align-items-center"><?= $cat[$i]->libelle ?></p>
                <img src="../assets/images/category/<?= $cat[$i]->image ?>" alt="<?= $cat[$i]->libelle ?>" class="photo_cat object-fit-cover">
            </div>
        </a>
    <?php endif;
endfor;

require_once(__DIR__ . "/footer.php"); ?>