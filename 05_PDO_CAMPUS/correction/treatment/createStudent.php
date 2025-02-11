<?php
require_once "./../../../config.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/class/Student.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/correction/repository/StudentRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['name']) &&
    isset($_POST['surname']) &&
    isset($_POST['birthdate']) &&
    isset($_POST['email']) &&
    isset($_POST['department'])
) {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email = htmlspecialchars($_POST['email']);
    $department = htmlspecialchars($_POST['department']);

    $newStudent = new Student(
        null,
        $name,
        $surname,
        $birthdate,
        $email,
        $department
    );

    $studentRepository = new StudentRepository();

    $studentRepository->create($newStudent);

    header('Location: ./../index.php');
}
