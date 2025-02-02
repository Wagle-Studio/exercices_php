<?php
// No need to require `config.php` because it's already required by the parent template.
require_once PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/classes/Db.php";
require_once PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/classes/User.php";

// Create new database connexion.
$newDbConnexion = new Db(PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/db.csv");

// Read CSV and loop into data to create User instance for every record.
$rawUsers = $newDbConnexion->readFromCsv();
$users = [];

foreach ($rawUsers as $rawUser) {
    $user = new User($rawUser[1], $rawUser[2], $rawUser[0]);
    $users[] = $user;
}
?>

<section class="exercice">
    <h2 class="exerciceTitle">Correction CRUD</h2>
    <div class="exerciceboxStorage">
        <?php include PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/templates/components/toast.php" ?>
        <div class="exerciceBoxStorageToolbar">
            <a class="button--small" href="<?php echo BASE_URL . "/03_CRUD_CSV/correction/templates/pages/create.php"; ?>">Créer un utilisateur</a>
        </div>
        <div class="exerciceBoxStorageBody">
            <table class="exerciceBoxStorageBodyTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop into users array to create table body rows.
                    foreach ($users as $user) {
                        $editUrl = BASE_URL . "/03_CRUD_CSV/correction/templates/pages/edit.php?id=" . urlencode($user->getId());
                        $deleteAction = BASE_URL . "/03_CRUD_CSV/correction/src/treatments/deleteUser.php";

                        echo "<tr>";
                        echo "<td>{$user->getId()}</td>";
                        echo "<td>{$user->getEmail()}</td>";
                        echo "
                            <td>
                                <a class='button--small' href='{$editUrl}'>Modifier</a>
                                <form action='{$deleteAction}' method='POST' style='display:inline;'>
                                    <input type='hidden' name='userId' value='" . htmlspecialchars($user->getId()) . "'>
                                    <button type='submit' class='button--small'>Supprimer</button>
                                </form>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>