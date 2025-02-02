<?php

require_once __DIR__ . './../../class/Student.php';
require_once __DIR__ . './../repository/StudentRepository.php';

if (
    !empty($_POST) &&
    isset($_POST['studentId'])
) {
    $studentId = htmlspecialchars($_POST['studentId']);

    $studentRepository = new StudentRepository();

    $searchedStudent = $studentRepository->findById($studentId);

    $jsonStudent = json_encode($searchedStudent->toAssociativeArray());

    echo $jsonStudent;
}
