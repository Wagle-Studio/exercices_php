<section class="exercice">
    <h2 class="exerciceTitle">Correction créer un utilisateur</h2>
    <div class="exerciceboxStorage">
        <form action="<?php echo BASE_URL . "/03_CRUD_CSV/correction/src/treatments/createUser.php"; ?>" method="POST" class="exerciceForm">
            <div class="exerciceFormGroup">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="exerciceFormGroup">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="exerciceFormActions">
                <button type="submit" class="button--small">Créer</button>
                <a href="<?php echo BASE_URL . "/03_CRUD_CSV/correction/index.php"; ?>" class="button--small">Annuler</a>
            </div>
        </form>
    </div>
</section>