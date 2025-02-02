<?php
require_once "./../../../config.php";

session_start();

if (!empty($_SESSION)) {
    header('Location: ../index.php');
}

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
    <link rel="stylesheet" href="<?php echo BASE_URL . "/00_AUTH_SESSION_CSV/assets/style.css" ?>" />
    <title>00 Auth session CSV - correction</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>Page de connexion</h1>
                    </div>
                    <a href="../index.php" class="button">Retour à la correction</a>
                </div>
            </div>
        </article>
    </main>
</body>

</html>