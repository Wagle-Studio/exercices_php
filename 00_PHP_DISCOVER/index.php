<?php
require_once "./../config.php";
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
    <title>00 PHP Discover</title>
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
                        <h1>00 PHP Discover</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_PHP_DISCOVER/correction/index.php"; ?>" class="button">Voir la correction</a>
                </div>
                <div>
                    <p>Prise en main de PHP</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 0</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 0 : Prise en main de PHP
                            // ========================================================================
                            // Objectif : Prendre en main PHP et sa syntaxe.

                            // 1. Utilisez la fonction `echo` pour afficher la chaîne de caractères "hello".
                            // 2. Déclarez une variable `name` avec la valeur "Simplon".
                            // 3. Utilisez la fonction `echo` pour afficher "hello" suivi du contenu de la variable `name`.
                            // 4. Faire une condition sur la variable `name` :
                            //    - si elle n'est pas vide, affichez `hello + <valeur_variable_name>`, sinon "hello inconnu(e)".
                            //    - mettre la valeur `null` dans la variable `name` pour vérifier que tout fonctionne.
                            // 5. Écrivez une boucle for qui compte de 1 à 5 (utilisez la fonction `echo`).
                            // 6. Déclarez un tableau contenant 10 prénoms.
                            // 7. Parcourez le tableau de prénoms et affichez chaque prénom à l'aide d'une boucle `foreach`.
                            // 8. Ajouter une condition dans la boucle précédente pour vérifier chaque prénom
                            //    - si le prénom a une longueur supérieur à 5, affichez `prénom long`
                            //    - si le prénom a une longueur inférieur à 5, affichez `prénom court`
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 1</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 1 : Création et Affichage d'un Tableau de Villes
                            // ========================================================================
                            // Objectif : Pratiquer la manipulation de tableaux en PHP pour gérer des informations
                            // sur des villes et leur population.

                            $villes = [
                                ["nom" => "Paris", "population" => "22200000"],
                                ["nom" => "Marseille", "population" => "19000000"],
                                ["nom" => "Lyon", "population" => "9900000"],
                            ];

                            // 1. Utilisez une boucle `foreach` pour parcourir le tableau `$villes`.
                            //    Pour chaque ville, affichez une phrase indiquant le nom de la ville et sa population,
                            //    par exemple : "Paris a une population de 2 200 000 habitants."
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 2</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : Calcul de la Population Totale
                            // ========================================================================
                            // Objectif : Utiliser les structures de contrôle pour calculer et afficher la population totale.

                            // 1. Initialisez une variable `$populationTotale` à 0.

                            // 2. Parcourez le tableau `$villes` à l'aide d'une boucle et additionnez la population de chaque ville
                            //    à `$populationTotale`.

                            // 3. Après la boucle, affichez le résultat : "La population totale des villes listées est de X habitants."
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 3</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 3 : Filtrage des Villes par Population
                            // ========================================================================
                            // Objectif : Créer un nouveau tableau contenant uniquement les villes de plus de 10 million d'habitants.

                            // 1. Créez un tableau vide `$grandesVilles`.

                            // 2. Utilisez une boucle pour parcourir `$villes`. Si une ville a une population supérieure à 10 million,
                            //    ajoutez-la au tableau `$grandesVilles`.

                            // 3. Affichez les éléments de `$grandesVilles` en utilisant une boucle, avec une phrase pour chaque ville,
                            //    semblable à l'exercice 1.
                            ?>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>