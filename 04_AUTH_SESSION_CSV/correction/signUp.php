<?php
require_once "./../../config.php";
require_once PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/class/User.php';
require_once PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/class/Db.php';

if (!empty($_POST) && isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['passwordConfirm'])) {

    // Sanitiser les données d'entrée pour éviter les attaques XSS. 
    // Note : cette étape ne remplace pas la validation complète des données.
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);

    // Vérifier si les deux mots de passe saisis sont identiques.
    if ($password === $passwordConfirm) {

        // Hacher le mot de passe à l'aide de l'algorithme bcrypt par défaut.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Créer une nouvelle instance de la classe User avec les données nettoyées et le mot de passe haché.
        $newUser = new User($username, $email, $hashedPassword);

        // Créer une nouvelle instance de la classe Db pour gérer les opérations sur le fichier CSV.
        $newDbConnection = new Db(PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/db.csv');

        // Vérifier si le fichier CSV est accessible en écriture.

        // Ouvrir le fichier CSV pour ajouter les données sans écraser les données existantes.
        $csv = $newDbConnection->openCsv();

        // Assurer que l'ouverture du fichier a réussi avant de continuer.
        if ($csv !== false) {

            // Écrire les données de l'utilisateur dans le fichier CSV.
            $newDbConnection->writeIntoCsv($csv, $newUser->convertToArray());

            // Fermer le fichier CSV pour libérer le fichier et les ressources système.
            $newDbConnection->closeCsv($csv);

            // Rediriger l'utilisateur vers la page d'accueil avec un paramètre indiquant le succès de l'inscription.
            header("Location: " . BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php?successSignUp=1");

            exit; // Assurez-vous d'arrêter l'exécution du script après une redirection.
        }
    } else {
        // Rediriger l'utilisateur si les mots de passe ne correspondent pas.
        header("Location: " . BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php?successSignUp=0");

        exit; // Assurez-vous d'arrêter l'exécution du script après une redirection.
    }
}
