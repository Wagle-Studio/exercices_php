<?php
require_once "./../../../config.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/class/Student.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/correction/repository/StudentRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['studentId'])
) {
    $studentId = htmlspecialchars($_POST['studentId']);

    $studentRepository = new StudentRepository();

    $studentRepository->delete($studentId);
}
