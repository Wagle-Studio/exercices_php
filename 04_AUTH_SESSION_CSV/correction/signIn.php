<?php
require_once "./../../config.php";
require_once PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/class/User.php';
require_once PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/class/Db.php';

if (!empty($_POST) && isset($_POST['username']) && isset($_POST['password'])) {

    // Sanitiser les données d'entrée pour éviter les attaques XSS. 
    // Note : cette étape ne remplace pas la validation complète des données.
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Créer une nouvelle instance de la classe Db pour gérer les opérations sur le fichier CSV.
        $newDbConnection = new Db(PROJECT_ROOT_PATH . '/04_AUTH_SESSION_CSV/correction/db.csv');

    $registeredUsers = $newDbConnection->readFromCsv();

    foreach ($registeredUsers as $registeredUser) {
        $registeredUserUsername = $registeredUser[0];
        $registeredUserEmail = $registeredUser[1];
        $registeredUserPassword = $registeredUser[2];

        if ($username === $registeredUserUsername && password_verify($password, $registeredUserPassword)) {

            // Créer une nouvelle instance de la classe User avec les données issues de la base de données.
            $authenticatedUser = new User($registeredUserUsername, $registeredUserEmail, $registeredUserPassword);

            // PARTIE AVEC PARAMÈTRES DANS L'URL

            // Rediriger l'utilisateur vers la page d'accueil avec un paramètre indiquant le succès de la connexion
            // ainsi que son nom d'utilisateur.
            // header("Location: index.php?successSignIn=1&username=" . $authenticatedUser->getUsername());

            // PARTIE AVEC SESSION PHP

            // Créer une session et rediriger l'utilisateur vers la page d'accueil;
            // Contrairement à la méthode exploitant les paramètres d'URL nous utiliserons la session pour
            // véhiculer de l'information entre le backend et le frontend.
            session_start();

            $_SESSION['isAuthenticated'] = true;
            $_SESSION['username'] = $authenticatedUser->getUsername();
            $_SESSION['role'] = 'admin';

            header("Location: " . BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php");

            exit; // Assurez-vous d'arrêter l'exécution du script après une redirection.
        }
    }

    // Rediriger l'utilisateur si les identifiants ne correspondent pas.
    header("Location: " . BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php?successSignIn=0");

    exit; // Assurez-vous d'arrêter l'exécution du script après une redirection.
}
