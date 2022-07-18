<?php

declare(strict_types=1);
// Looking for .env at the root directory
class DatabaseLoader
{
    private string $dbhost;
    private string $dbname;
    private string $dbuser;
    private string $dbpass;
    private PDO $conn;

    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable((dirname(__DIR__, 1)), ".env");
        $dotenv->load();
        $this->dbhost = $_ENV['DATABASE_HOST'];
        $this->dbname = $_ENV['DATABASE_NAME'];
        $this->dbuser = $_ENV['DATABASE_USER'];
        $this->dbpass = $_ENV['DATABASE_PASSWORD'];
        $this->getConnection();
    }

    public function getConnection(): PDO
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname, $this->dbuser, $this->dbpass);

            //uncomment echo to check if connection was established
            //             echo "Connected to $this->dbname at $this->dbhost successfully.";

            return $this->conn;
        } catch (PDOException $pe) {
            die("Could not connect to the database $this->dbname :" . $pe->getMessage());
        }
    }


    public function getAllStudents()
    {
        $sqlAllStudents = $this->getConnection()->query("SElECT * FROM STUDENTS");
        $studentsArray = [];
        while ($row = $sqlAllStudents->fetch()) {
            $studentsArray[] = new Student($row[0], $row[1], $row[2], $row[3]);
        }
        return $studentsArray;
    }



    public function getStudentById($inputId)
    {
        $sqlRequestedStudentId = $this->getConnection()->query('SELECT * FROM students WHERE ID =' . $inputId);
        $requestedStudentId[] = $sqlRequestedStudentId->fetch();

        return $requestedStudentId;
    }



    public function getAllTeachers()
    {
        $sqlGetAllTeachers = $this->getConnection()->query('SELECT * FROM Coaches');
        $teacherArray = [];
        while ($row = $sqlGetAllTeachers->fetch()) {
            $teacherArray[] = new Teacher($row[0], $row[1], $row[2]);
        }
        return $teacherArray;
    }



    public function getTeacherById($inputId)
    {
        $sqlRequestedTeacherId = $this->getConnection()->query('SELECT * FROM Coaches WHERE ID =' . $inputId);
        $requestedTeacherId[] = $sqlRequestedTeacherId->fetch();

        return $requestedTeacherId;
    }

    public function getAllGroups():array
    {

        $sqlGetAllGroups = $this->getConnection()->query("SELECT * FROM group_table");
        $groupArray = [];
        while ($row = $sqlGetAllGroups->fetch()) {
            $groupArray[] = new Group($row[0], $row[1], $row[2], $row[3]);

        }
        return $groupArray;
    }



    public function getGroupById($inputId)
    {
        $sqlRequestGroupId = $this->getConnection()->query('SELECT * FROM group_table WHERE ID =' . $inputId);
        $requestedGroupId[] = $sqlRequestGroupId->fetch();
        return $requestedGroupId;
    }

    public function deleteGroup($deleteID): void
    {

        $sqlDeleteEntry = $this->getConnection()->query('DELETE FROM group_table WHERE ID =' . $deleteID);

    }


    public function deleteStudent($deleteID): void
    {

        $sqlDeleteEntry = $this->getConnection()->query('DELETE FROM Students WHERE ID=' . $deleteID);

    }


    public function deleteTeacher($deleteID): void
    {

        $sqlDeleteEntry = $this->getConnection()->query('DELETE FROM Coaches WHERE ID=' . $deleteID);

    }

    public function createNewStudent($newname, $email, $groupId): string
    {
        if ($newname !== "" && $email !== "") {
            $sql = "INSERT INTO students (firstname, email, group_id) VALUES (:firstname, :email , :group_id)";
            $sth = $this->getConnection()->prepare($sql);
            $sth->execute(array(':firstname' => $newname, ':email' => $email, ':group_id' => (int)$groupId));
            $succes = 'Create Student Successfully';
            return $succes;
        } else {
            $succes = 'no way José';
            return $succes;
        }
    }
    public function updateStudent(int $id, string $newname, string $email, int $groupId)
    {
        //     $sql = "UPDATE students SET (name,email,group_id) VALUES (':newname' , ':email' , ':groupId') WHERE id = :id";
        //     $sth = $this->getConnection()->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        //     $sth->execute(array('newname' => $newname, 'email' => $email, 'group_id' => $groupId, 'id' => $id));

        $sql = "UPDATE students SET firstname = :firstname, email = :email , group_id = :group_id WHERE id = :id";
        $sth = $this->getConnection()->prepare($sql);
        $sth->execute(array(':firstname' => $newname, ':email' => $email, ':group_id' => $groupId, ':id' => $id));
    }

    public function createNewGroup($newGroupName, $newCoachId, $newLocation): string
    {
        if ($newGroupName !== "" && $newLocation !== "") {
            $sql = "INSERT INTO group_table (group_name, coach_id, group_location) VALUES (:group_name, :coach_id , :group_location)";
            $sth = $this->getConnection()->prepare($sql);
            $sth->execute(array(':group_name' => $newGroupName, ':coach_id' => $newCoachId, ':group_location' => $newLocation));
            $succes = 'Created group Successfully';
            return $succes;
        } else {
            $succes = 'no way José';
            return $succes;
        }
    }

    public function updateGroup(int $id, string $newGroupName, int $newCoachId, string $newLocation)
    {
        $sql = "UPDATE group_table SET group_name = :group_name, coach_id = :coach_id , group_location = :group_location WHERE id = :id";
        $sth = $this->getConnection()->prepare($sql);
        $sth->execute(array(':group_name' => $newGroupName, ':coahc_id' => $newCoachId, ':group_location' => $newLocation, ':id' => $id));
    }
}
