<?php require_once(__DIR__ . "/DAO.php"); 
$dao = new DAO();
if (isset($_GET['id'])) {
    $platId = $_GET['id'];
    $plat = $dao->getPlat($platId);
}
require_once(__DIR__ . "/header.php"); ?>

<form id="commande" method="post" action="post_commande.php" class="d-flex flex-wrap justify-content-around mt-5">
    <!-- Champ caché pour l'ID du plat -->
    <input type="hidden" name="id_plat" value="<?= $plat->id ?>">
    <div class="plats_commande d-flex">
        <img src="../assets/images/food/<?= $plat->image ?>" alt="<?= $plat->libelle ?>" class="object-fit-cover" id=plat<?= $plat->id ?>>
        <div class="recap_com d-flex flex-column justify-content-between bg-transparent">
            <div class=" titre_des bg-transparent d-flex justify-content-between align-items-center">
                <p class="titre_plat text-center"><?= $plat->libelle ?></p>
                <hr class="shadow">
                <p class="description"><?= $plat->description ?></p>

            </div>
            <p class="description text-center"><?= $plat->prix ?>€</p>
            <div class="qt_plat d-flex align-items-center justify-content-between rounded-5">
                <label for="quantite" class="label_qtt fs-1">Quantité</label>
                <div class="nbr_qt bg-transparent">
                    <button type="button" id="moins" class="moins border-0 fs-1" onclick="retrait()">-</button>
                    <input type="number" id="quantite" name="quantite" value="1"
                        class="bg-transparent border-0 fs-1 text-center">
                    <button type="button" id="plus" class="plus border-0 fs-1" onclick="ajout()">+</button>
                </div>
            </div>
        </div>
    </div>
    <div class="champ d-flex mb-5">
        <label for="prenom" class="obligatoire fs-2">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="nom" class="obligatoire fs-2">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="email" class="obligatoire fs-2">Email</label>
        <input type="text" name="email" id="email" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="telephone" class="obligatoire fs-2">Téléphone</label>
        <input type="text" name="telephone" id="telephone" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5" id="champ_num">
        <label for="numero" class="obligatoire fs-2">N°</label>
        <input type="text" name="numero" id="numero" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5" id="champ_rue">
        <label for="rue" class="obligatoire fs-2">Rue</label>
        <input type="text" name="rue" id="rue" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5" id="champ_cp">
        <label for="code_postal" class="obligatoire fs-2">Code postal</label>
        <input type="text" name="code_postal" id="code_postal" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5" id="champ_ville">
        <label for="ville" class="obligatoire fs-2">Ville</label>
        <input type="text" name="ville" id="ville" placeholder="Champ obligatoire"
            class="px-4 fs-4" required>
    </div>
    <p id="champ_obligatoire">* Champs obligatoires</p>
    <input type="submit" value="Envoyer" id="bouton" class="fs-2 border-0 rounded-4 my-5" onclick="verif_commande()">
    <button type="submit" id="envoi_mobile" class="border-0 rounded-circle align-items-center justify-content-center mb-3" onclick="verif()">
        <i class="fa-regular fa-paper-plane"></i>
    </button>
</form>
<div id="separation_tab"></div>
<?php require_once(__DIR__ . "/footer.php"); ?>

<script src="../assets/javascript/menu_burger.js"></script>
<script src="../assets/javascript/verif_form.js"></script>
<script src="../assets/javascript/quantite_plat.js"></script>
</body>

</html>