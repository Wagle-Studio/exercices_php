<?php
require_once "./../../../../config.php";
require_once PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/classes/Db.php";
require_once PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/classes/User.php";

// Check POST parameters.
if (empty($_POST) || !isset($_POST, $_POST["userId"], $_POST["email"], $_POST["password"])) {
    header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?editUser=unprocessable");
    exit;
}

// Sanitize data.
$userId = htmlspecialchars($_POST["userId"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

$user = new User($email, password_hash($password, PASSWORD_DEFAULT), $userId);

// Create new database connexion.
$newDbConnexion = new Db(PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/db.csv");

// Update user record matching user id, then redirect the user.
$updateUserSucces = $newDbConnexion->updateRecordById($userId, $user->toArray());

// Redirect if an error append when updating CSV.
if (!$updateUserSucces) {
    header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?editUser=error");
    exit;
}

header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?editUser=success");
exit;
