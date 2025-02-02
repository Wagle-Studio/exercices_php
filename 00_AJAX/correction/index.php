<?php
require_once "./../../config.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/global.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/app.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/exercice.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/00_AJAX/assets/style.css"; ?>">
    <title>00 AJAX - correction</title>
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
                        <h1>00 AJAX - correction</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_AJAX/index.php"; ?>" class="button">Retour à l'exercice</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Requête AJAX - GET</h2>
                        <div class="exerciceboxStorage" id="target_exo_1">
                            <?php
                            // ========================================================================
                            // Pas besoin de PHP, rendez-vous dans le fichier `index.js`.
                            // ========================================================================
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Requête AJAX - POST</h2>
                        <div class="exerciceboxStorage" style="display: flex; flex-direction: column; gap: 24px;">
                            <div id="target_exo_2"></div>
                            <?php
                            // ========================================================================
                            // Pas besoin de PHP, rendez-vous dans le fichier `index.js`.
                            // ========================================================================
                            ?>
                            <form id="form_exo_2" style="display: flex; flex-direction: column; gap: 12px;">
                                <label for="country">Un nom de pays</label>
                                <input style="width: 250px;" type="text" name="country" id="country">
                                <button style="width: max-content;">Tu connais ?</button>
                            </form>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
    <script src="./index.js" type="module"></script>
</body>

</html>