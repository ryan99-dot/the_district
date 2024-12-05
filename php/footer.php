<?php
$file = basename($path);

if ($file == "index.php" || $file == "plats_categories.php" || $file == "plats.php") : ?>
        <div id="separation_ass"></div>
<?php elseif ($file == "categories.php") : ?>
        <div id="separation_leg" class="my-5"></div>
<?php else : ?>
        <div id="separation_tab"></div>
<?php endif; ?>

<footer class="justify-content-around mb-3">
        <a href="<?= $file == 'index.php' ? 'php/politique_de_confidentialite.php' : 'politique_de_confidentialite.php' ?>" class="text-decoration-none text-black text-center d-flex align-items-center justify-content-center" style="width: 24%;">Politique de confidentialité</a>

        <div class="justify-content-center" style="width: 50%;">
                <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-facebook-f me-5 rounded-circle d-flex justify-content-center align-items-center border border-3 border-dark"></i>
                </a>
                <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-instagram me-5 rounded-circle d-flex justify-content-center align-items-center border border-3 border-dark"></i>
                </a>
                <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-linkedin-in me-5 rounded-circle d-flex justify-content-center align-items-center border border-3 border-dark"></i>
                </a>
                <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-pinterest-p me-5 rounded-circle d-flex justify-content-center align-items-center border border-3 border-dark"></i>
                </a>
                <a href="#" class="text-decoration-none">
                        <i class="fa-brands fa-youtube rounded-circle d-flex justify-content-center align-items-center border border-3 border-dark"></i>
                </a>
        </div>
        <a href="<?= $file == 'index.php' ? 'php/mentions_legales.php' : 'mentions_legales.php' ?>" class="text-decoration-none text-black d-flex align-items-center justify-content-center" style="width: 24%;">Mentions légales</a>
</footer>




<?php if ($file == "index.php") : ?>
        <script src="assets/javascript/menu_burger.js"></script>
        <script src="assets/javascript/plats.js"></script>
<?php else : ?>
        <script src="../assets/javascript/menu_burger.js"></script>
        <script src="../assets/javascript/plats.js"></script>
        <script src="../assets/javascript/verif_form.js"></script>
<?php endif; ?>

</body>

</html>