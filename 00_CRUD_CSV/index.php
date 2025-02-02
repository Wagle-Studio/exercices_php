<?php
# NO WORK TO DO IN THIS FILE, DO NOT MODIFY THIS FILE #
require_once "./../config.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/global.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/app.css" ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/exercice.css" ?>" />
    <title>00 CRUD CSV</title>
</head>

<body>
    <main>
        <div class="appExerciceHeader">
            <svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
            </svg>
            <a href="<?php echo BASE_URL . "/index.php"; ?>">Retour à l'accueil</a>
        </div>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>00 CRUD CSV</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_CRUD_CSV/correction/index.php"; ?>" class="button">Voir la correction</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <?php
                    include PROJECT_ROOT_PATH . "/00_CRUD_CSV/templates/components/cardCollection.php";
                    ?>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>