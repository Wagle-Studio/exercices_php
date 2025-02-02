<?php
require_once "./config.php";
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
    <title>Exercices PHP</title>
</head>

<body>
    <main>
        <ul>
            <li>
                <a href="<?php echo BASE_URL . "/00_AJAX/index.php" ?>">00 AJAX</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL . "/00_PDO_CAMPUS/index.php" ?>">00 PDO CAMPUS</a>
            </li>
            <li>
                <a href="<?php echo BASE_URL . "/00_CRUD_CSV/index.php" ?>">00 CRUD CSV</a>
            </li>
        </ul>
    </main>
</body>

</html>