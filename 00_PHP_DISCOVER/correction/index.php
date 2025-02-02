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
    <title>00 PHP Discover - correction</title>
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
                        <h1>00 PHP Discover - correction</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_PHP_DISCOVER/index.php"; ?>" class="button">Revenir à l'exercice</a>
                </div>
                <div>
                <p>Prise en main de PHP</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 1</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 1 : Création et Affichage d'un Tableau de Villes
                            // ========================================================================
                            
                            $villes = [
                                ["nom" => "Paris", "population" => "22200000"],
                                ["nom" => "Marseille", "population" => "19000000"],
                                ["nom" => "Lyon", "population" => "9900000"],
                            ];

                            foreach ($villes as $ville) {
                                echo "<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>";
                            }

                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 2</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : Calcul de la Population Totale
                            // ========================================================================
                            
                            $populationTotal = 0;

                            foreach ($villes as $ville) {
                                $populationTotal += $ville["population"];
                            }

                            echo "<p>La population totale des villes listées est de " . $populationTotal . " habitants</p>";

                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 3</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 3 : Filtrage des Villes par Population
                            // ========================================================================
                            
                            $grandesVilles = [];

                            foreach ($villes as $ville) {
                                if ($ville['population'] > 10000000) {
                                    $grandesVilles[] = $ville;
                                }
                            }

                            foreach ($grandesVilles as $ville) {
                                echo "<p>" . $ville["nom"] . " a une population de " . $ville["population"] . "</p>";
                            }
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>