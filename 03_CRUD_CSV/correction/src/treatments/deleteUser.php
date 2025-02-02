<?php
require_once "./../../../../config.php";
require_once PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/classes/Db.php";

// Check POST parameters.
if (empty($_POST) || !isset($_POST["userId"])) {
    header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?deleteUser=unprocessable");
    exit;
}

// Sanitize data.
$userId = htmlspecialchars($_POST["userId"]);

// Create new database connexion.
$newDbConnexion = new Db(PROJECT_ROOT_PATH . "/03_CRUD_CSV/correction/src/db.csv");

// Delete record matching user id, then redirect the user.
$deleteSuccess = $newDbConnexion->deleteRecordByUserId($userId);

// Redirect if an error append when updating CSV.
if (!$deleteSuccess) {
    header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?deleteUser=error");
    exit;
}

header("Location: " . BASE_URL . "/03_CRUD_CSV/correction/index.php?deleteUser=success");
exit;
