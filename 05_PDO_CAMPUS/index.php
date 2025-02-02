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
    <link rel="stylesheet" href="<?php echo BASE_URL . "/05_PDO_CAMPUS/assets/style.css"; ?>">
    <title>05 PDO Campus</title>
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
                        <h1>05 PDO Campus</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/05_PDO_CAMPUS/correction/index.php"; ?>" class="button">Voir la correction</a>
                </div>
                <div>
                    <p>Exploiter la base de données avec PHP et PDO</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 1 - read</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 1 : READ
                            // ========================================================================
                            // Objectif : Afficher une liste des étudiants du campus.
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 2 - create</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : CREATE
                            // ========================================================================
                            // Objectif : Créer de nouveaux étudiants.
                            ?>
                            <form action="createStudent.php" method="POST">
                                <div>
                                    <label for="name">Name *</label>
                                    <input required type="text" name="name" id="name">
                                </div>
                                <div>
                                    <label for="surname">Surname *</label>
                                    <input required type="text" name="surname" id="surname">
                                </div>
                                <div>
                                    <label for="birthdate">Birthdate *</label>
                                    <input required type="date" name="birthdate" id="birthdate">
                                </div>
                                <div>
                                    <label for="email">Email *</label>
                                    <input required type="email" name="email" id="email">
                                </div>
                                <div>
                                    <label for="department">Department</label>
                                    <select required name="department" id="department">
                                        <option value="1">École d'Ingénierie</option>
                                        <option value="2">Faculté des Sciences</option>
                                        <option value="3">Faculté des Arts</option>
                                        <option value="4">Faculté de Lettres</option>
                                        <option value="5">Faculté des Sciences de la Vie</option>
                                        <option value="6">Département d'Histoire</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" value="Save">
                                </div>
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 3 - update</h2>
                        <div class="exerciceboxStorage">
                            <div>
                                <label for="student"></label>
                                <select name="student" id="student">
                                    <?php
                                    // ========================================================================
                                    // Exercice 3 : UPDATE
                                    // ========================================================================
                                    // Objectif : Mettre à jours un étudiant.

                                    // Créer autant d'option pour le select que d'étudiant en base de données.
                                    // Voir consigne complète dans le fichier day_3.md
                                    ?>
                                    <option value="a_modifier_voir_consigne_day_3">À modifier, voir consigne day_3</option>
                                </select>
                            </div>
                            <div id="studentForm"></div>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 4 - delete</h2>
                        <div class="exerciceboxStorage">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Birthdate</th>
                                    <th>Email</th>
                                    <th>Department ID</th>
                                    <th></th>
                                </tr>
                                <?php
                                // ========================================================================
                                // Exercice 4 : DELETE
                                // ========================================================================
                                // Objectif : Supprimer un étudiant.

                                // Créer autant de ligne de tableau que d'étudiant en base de données, voir model ci-dessous.
                                // Voir consigne complète dans le fichier day_3.md
                                ?>
                                <tr>
                                    <td>student id</td>
                                    <td>student name</td>
                                    <td>student surname</td>
                                    <td>student birthdate</td>
                                    <td>student email</td>
                                    <td>student department id</td>
                                    <td>
                                        <button data-id="<id_de_l_etudiant>" class="trash-icon">
                                            delete
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>