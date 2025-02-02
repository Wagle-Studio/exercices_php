<?php
require_once "./../../../config.php";

session_start();

session_destroy();

header("Location: " . BASE_URL . "/04_AUTH_SESSION_CSV/correction/index.php");
