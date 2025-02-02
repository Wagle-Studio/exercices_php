<?php
require_once "./../../config.php";
require_once PROJECT_ROOT_PATH . "/00_PDO_CAMPUS/correction/repository/StudentRepository.php";

$studentRepository = new StudentRepository();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/global.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/app.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/styles/exercice.css"; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL . "/00_PDO_CAMPUS/assets/style.css"; ?>">
    <title>00 PDO Campus - correction</title>
</head>

<body>
    <main>
        <div class="appExerciceHeader">
            <svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
            </svg>
            <a href="<?php echo BASE_URL . "/index.php"; ?>">Retour à l'accueil</a>
        </div>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>00 PDO Campus - correction</h1>
                    </div>
                    <a href="<?php echo BASE_URL . "/00_PDO_CAMPUS/index.php"; ?>" class="button">Revenir à l'exercice</a>
                </div>
                <div>
                    <p>Exploiter la base de données avec PHP et PDO</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 1 - read</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            $students = $studentRepository->getAll();

                            echo ('<ul>');

                            foreach ($students as $student) {
                                echo (
                                    '<li>'
                                    . $student->getName() . ' - ' . $student->getSurname() .
                                    '</li>'
                                );
                            }

                            echo ('</ul>');
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 2 - create</h2>
                        <div class="exerciceboxStorage">
                            <form action="./treatment/createStudent.php" method="POST">
                                <div>
                                    <label for="name">Name *</label>
                                    <input required type="text" name="name" id="name">
                                </div>
                                <div>
                                    <label for="surname">Surname *</label>
                                    <input required type="text" name="surname" id="surname">
                                </div>
                                <div>
                                    <label for="birthdate">Birthdate *</label>
                                    <input required type="date" name="birthdate" id="birthdate">
                                </div>
                                <div>
                                    <label for="email">Email *</label>
                                    <input required type="email" name="email" id="email">
                                </div>
                                <div>
                                    <label for="department">Department</label>
                                    <select required name="department" id="department">
                                        <option value="1">École d'Ingénierie</option>
                                        <option value="2">Faculté des Sciences</option>
                                        <option value="3">Faculté des Arts</option>
                                        <option value="4">Faculté de Lettres</option>
                                        <option value="5">Faculté des Sciences de la Vie</option>
                                        <option value="6">Département d'Histoire</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" value="Save">
                                </div>
                            </form>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 3 - update</h2>
                        <div class="exerciceboxStorage">
                            <div>
                                <select name="student" id="student">
                                    <?php

                                    foreach ($students as $student) {
                                        echo (
                                            '<option value="' . $student->getId() . '">'
                                            . $student->getName() . ' - ' . $student->getSurname() .
                                            '</option>'
                                        );
                                    }

                                    ?>
                                </select>
                            </div>
                            <div id="studentForm"></div>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Correction 4 - delete</h2>
                        <div class="exerciceboxStorage">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Birthdate</th>
                                    <th>Email</th>
                                    <th>Department ID</th>
                                    <th></th>
                                </tr>
                                <?php

                                foreach ($students as $student) {
                                    echo (
                                        '<tr>
                                            <td>'
                                        . $student->getId() .
                                        '</td>
                                            <td>'
                                        . $student->getName() .
                                        '</td>
                                            <td>'
                                        . $student->getSurname() .
                                        '</td>
                                            <td>'
                                        . $student->getBirthdate() .
                                        '</td>
                                            <td>'
                                        . $student->getEmail() .
                                        '</td>
                                            <td>'
                                        . $student->getDepartmentId() .
                                        '</td>
                                            <td>
                                                <button data-id="' . $student->getId() . '" class="trash-icon">
                                                    delete
                                                </button>
                                            </td>
                                        </tr>'
                                    );
                                }

                                ?>
                            </table>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
    <script src="./assets/updateStudent.js"></script>
    <script src="./assets/deleteStudent.js"></script>
</body>

</html>