<?php
// Check GET parameters.
if (empty($_GET) || !isset($_GET["id"])) {
    throw new Exception("Error CRUD edit : URL id query is missing.", 422);
}

$UserToEditId = $_GET["id"];

// No need to require `config.php` because it's already required by the parent template.
require_once PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/classes/Db.php";
require_once PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/classes/User.php";

// Create new database connexion.
$newDbConnexion = new Db(PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/db.csv");

// Read CSV to get a users array.
$rawUsers = $newDbConnexion->readFromCsv();
$userToEdit = null;

// Look for the user to edit base on the user id.
foreach ($rawUsers as $rawUser) {
    $user = new User($rawUser[1], $rawUser[2], $rawUser[0]);

    if ($user->getId() === $UserToEditId) {
        $userToEdit = $user;
    }
}

if (!$userToEdit) {
    throw new Exception("Error CRUD edit : Unknown user.", 422);
}
?>

<section class="exercice">
    <h2 class="exerciceTitle">Correction éditer un utilisateur</h2>
    <div class="exerciceboxStorage">
        <form action="<?php echo BASE_URL . "/00_CRUD_CSV/correction/src/treatments/editUser.php"; ?>" method="POST" class="exerciceForm">
            <!-- Need an hidden input with the user id as value to keep track of it for the future treatments. -->
            <input hidden type="text" id="userId" name="userId" value="<?php echo ($userToEdit->getId()) ?>" required>
            <div class="exerciceFormGroup">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="<?php echo ($userToEdit->getEmail()) ?>" required>
            </div>
            <div class="exerciceFormGroup">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="exerciceFormActions">
                <button type="submit" class="button--small">Sauvegarder</button>
                <a href="<?php echo BASE_URL . "/00_CRUD_CSV/correction/index.php"; ?>" class="button--small">Annuler</a>
            </div>
        </form>
    </div>
</section>