<?php
require_once "./../../../../config.php";
require_once PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/classes/Db.php";
require_once PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/classes/User.php";

// Check POST parameters.
if (empty($_POST || !isset($_POST, $_POST["email"], $_POST["password"]))) {
    header("Location: " . BASE_URL ."/00_CRUD_CSV/correction/index.php?createUser=unprocessable");
    exit;
}

// Sanitize data.
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

$user = new User($email, password_hash($password, PASSWORD_DEFAULT));

// Create new database connexion and get CSV stream.
$newDbConnexion = new Db(PROJECT_ROOT_PATH . "/00_CRUD_CSV/correction/src/db.csv");
$stream = $newDbConnexion->openCsv();

// Redirect if stream isn't available.
if (!isset($stream) || $stream == false) {
    header("Location: " . BASE_URL ."/00_CRUD_CSV/correction/index.php?createUser=streamError");
    exit;
}

// Create a new record for the user into the CSV, then close it and redirect.
$newDbConnexion->writeIntoCsv($stream, $user->toArray());
$newDbConnexion->closeCsv($stream);

header("Location: " . BASE_URL ."/00_CRUD_CSV/correction/index.php?createUser=success");
exit;
