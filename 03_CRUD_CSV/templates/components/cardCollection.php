<?php
// No need to require `config.php` because it's already required by the parent template.
// 1. Create new database connexion.
// 2. Read CSV and loop into data to create User instance for every record. Stock theses users into an array for later.
?>

<section class="exercice">
    <h2 class="exerciceTitle">CRUD</h2>
    <div class="exerciceboxStorage">
        <?php include PROJECT_ROOT_PATH . "/03_CRUD_CSV/templates/components/toast.php" ?>
        <div class="exerciceBoxStorageToolbar">
            <a class="button--small" href="<?php echo BASE_URL . "/03_CRUD_CSV/templates/pages/create.php"; ?>">Créer un utilisateur</a>
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
                    if (!isset($users)) return;

                    // 3. Loop into users array to create table body rows.
                    foreach ($users as $user) {
                        $editUrl = "";
                        $deleteAction = "";

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