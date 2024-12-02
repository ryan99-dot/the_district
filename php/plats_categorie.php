<?php require_once(__DIR__ . "/DAO.php");
$dao = new DAO();
if (isset($_GET['id'])) {
    $categorieId = $_GET['id'];
    $plats = $dao->getPlatByCat($categorieId);
}
require_once(__DIR__ . "/header.php");

foreach ($plats as $plat) : ?>
    <div class="plat d-flex align-items-center justify-content-between">
        <img src="../assets/images/food/<?= $plat->image ?>" alt="<?= $plat->libelle ?>" class="object-fit-cover" id="plat<?= $plat->id_plat ?>">
        <div class="tout d-flex">
            <p class="titre_plat text-center"><?= $plat->libelle ?></p>
            <hr class="shadow">
            <button class="chevron open border-0 bg-transparent">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="des_com flex-column align-items-center">
                <p class="description text-center"><?= $plat->description ?></p>
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

<div id="separation_ass"></div>

<?php require_once(__DIR__ . "/footer.php"); ?>

<script src="../assets/javascript/menu_burger.js"></script>
<script src="../assets/javascript/plats.js"></script>
</body>



</html>