<?php
require_once "./../../config.php";
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
    <title>00 CRUD CSV - correction</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>00 CRUD CSV - correction</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_CRUD_CSV/index.php"; ?>" class="button">Retour à l'exercice</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <?php
                    include PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/templates/components/cardCollection.php";
                    ?>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>