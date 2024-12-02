<?php require_once(__DIR__ . "/header.php"); ?>


<form method="post" action="post_contact.php" enctype="multipart/form-data" class="d-flex flex-wrap justify-content-around">
    <div class="champ d-flex mb-5">
        <label for="prenom" class="fs-2">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire" class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="nom" class="obligatoire fs-2">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Champ obligatoire" class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="email" class="fs-2">Email</label>
        <input type="text" name="email" id="email" placeholder="Champ obligatoire" class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex mb-5">
        <label for="telephone" class="obligatoire fs-2">Téléphone</label>
        <input type="text" name="telephone" id="telephone" placeholder="Champ obligatoire" class="px-4 fs-4" required>
    </div>
    <div class="champ d-flex flex-column mb-5" id="last">
        <label for="demande" class="fs-2">Votre demande</label>
        <textarea id="demande" name="demande" placeholder="Champ obligatoire" class="px-5 fs-4" required></textarea>
    </div>
    <p id="champ_obligatoire">* Champs obligatoires</p>
    <input type="submit" value="Envoyer" id="bouton" class="fs-2 border-0 rounded-4" onclick="verif_contact()">
    <button type="submit" id="envoi_mobile" class="border-0 rounded-circle align-items-center justify-content-center mb-3" onclick="verif()">
        <i class="fa-regular fa-paper-plane"></i>
    </button>
</form>

<div id="separation_tab"></div>

<?php require_once(__DIR__ . "/footer.php"); ?>

<script src="../assets/javascript/menu_burger.js"></script>
<script src="../assets/javascript/verif_form.js"></script>
</body>

</html>