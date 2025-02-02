<?php
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
    <link rel="stylesheet" href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/assets/style.css" ?>" />
    <title>04 Auth session CSV</title>
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
                        <h1>04 Auth session CSV</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php" ?>" class="button">Voir la correction</a>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Formulaire d'inscription</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            ?>
                            <form class="form" method="POST" action="./signUp.php">
                                <div class="inputboxStorage">
                                    <label for="username">Nom utilisateur *</label>
                                    <input type="text" name="username" id="username">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="email">Adresse email *</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="password">Mot de passe *</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="passwordConfirm">Confirmer mot de passe *</label>
                                    <input type="password" name="passwordConfirm" id="passwordConfirm">
                                </div>
                                <input type="submit" value="S'inscrire" id="signUp" class="button" />
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Formulaire de connexion</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            ?>
                            <form class="form" method="POST" action="./signIn.php">
                                <div class="inputboxStorage">
                                    <label for="username">Nom utilisateur *</label>
                                    <input type="text" name="username" id="username">
                                </div>
                                <div class="inputboxStorage">
                                    <label for="password">Mot de passe *</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <input type="submit" value="Se connecter" id="signin" class="button" />
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Test session PHP</h2>
                        <div class="exerciceboxStorage">
                            <div class="navbar">
                                <h3>Simplon</h3>
                                <ul>
                                    <li>
                                        <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/pages/pageHome.php"; ?>">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/pages/pageSignUp.php"; ?>">Inscription</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/pages/pageSignIn.php"; ?>">Connexion</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/pages/pageAdmin.php"; ?>">Administration</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL . "/04_AUTH_SESSION_CSV/pages/pageSignOut.php"; ?>">Déconnexion</a>
                                    </li>
                                </ul>
                            </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>