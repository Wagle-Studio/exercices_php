<?php
// No need to require `config.php` because it's already required by the parent template.
// 1. Check GET parameters.
// 2. Create new database connexion.
// 3. Read CSV to get a users array.
// 4. Look for the user to edit base on the user id.
?>

<section class="exercice">
    <h2 class="exerciceTitle">Éditer un utilisateur</h2>
    <div class="exerciceboxStorage">
        <form action="<?php echo BASE_URL . "/03_CRUD_CSV/src/treatments/editUser.php"; ?>" method="POST" class="exerciceForm">
            <!-- Need an hidden input with the user id as value to keep track of it for the future treatments. -->
            <!-- 5. Use the user id in the hidden input. -->
            <input hidden type="text" id="userId" name="userId" value="<replace with user id>" required>
            <div class="exerciceFormGroup">
                <label for="email">Email :</label>
                <!-- 6. Use the user email as email field default value. -->
                <input type="email" id="email" name="email" value="<replace with user email>" required>
            </div>
            <div class="exerciceFormGroup">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="exerciceFormActions">
                <button type="submit" class="button--small">Sauvegarder</button>
                <a href="<?php echo BASE_URL . "/03_CRUD_CSV/index.php"; ?>" class="button--small">Annuler</a>
            </div>
        </form>
    </div>
</section>