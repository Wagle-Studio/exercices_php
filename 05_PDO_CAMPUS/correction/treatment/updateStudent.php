<?php
require_once "./../../../config.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/class/Student.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/correction/repository/StudentRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['id']) &&
    isset($_POST['name']) &&
    isset($_POST['surname']) &&
    isset($_POST['birthdate']) &&
    isset($_POST['email']) &&
    isset($_POST['department'])
) {
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email = htmlspecialchars($_POST['email']);
    $department = htmlspecialchars($_POST['department']);

    $student = new Student(
        $id,
        $name,
        $surname,
        $birthdate,
        $email,
        $department
    );

    $studentRepository = new StudentRepository();

    $studentRepository->update($student);

    header('Location: ./../index.php');
}
