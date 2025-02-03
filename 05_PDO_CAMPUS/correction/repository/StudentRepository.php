<?php
require_once "./../../config.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/class/Student.php";
require_once PROJECT_ROOT_PATH . "/05_PDO_CAMPUS/correction/class/Db.php";

class StudentRepository extends Db
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        $students = [];

        foreach ($data as $student) {
            $newStudent = new Student(
                $student['id'],
                $student['name'],
                $student['surname'],
                $student['birthdate'],
                $student['email'],
                $student['department_id'],
            );

            $students[] = $newStudent;
        }

        return $students;
    }

    public function findById($studentId)
    {
        $request = 'SELECT * FROM student WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([':id' => $studentId]);

        $data = $query->fetch();

        if ($data) {
            $searchedStudent = new Student(
                $data['id'],
                $data['name'],
                $data['surname'],
                $data['birthdate'],
                $data['email'],
                $data['department_id']
            );

            return $searchedStudent;
        }
    }

    public function create($newStudent)
    {
        $request = 'INSERT INTO student (name, surname, birthdate, email, department_id) VALUES (:name, :surname, :birthdate, :email, :department)';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => $newStudent->getName(),
            'surname' => $newStudent->getSurname(),
            'birthdate' => $newStudent->getBirthdate(),
            'email' => $newStudent->getEmail(),
            'department' => $newStudent->getDepartmentId(),
        ]);
    }

    public function update($student)
    {
        $request = 'UPDATE student SET name = :name, surname = :surname, birthdate = :birthdate, email = :email, department_id = :department_id WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'name' => $student->getName(),
            'surname' => $student->getSurname(),
            'birthdate' => $student->getBirthdate(),
            'email' => $student->getEmail(),
            'department_id' => $student->getDepartmentId(),
            'id' => $student->getId(),
        ]);
    }

    public function delete($studentId)
    {
        $request = 'DELETE FROM student WHERE id = :id';

        $query = $this->getDb()->prepare($request);

        $query->execute([
            'id' => $studentId
        ]);
    }
}
