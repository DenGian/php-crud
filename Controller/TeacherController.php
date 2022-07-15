<?php
declare(strict_types = 1);

class TeacherController
{
    private DatabaseLoader $DBLoader;

    public function __construct($DBLoader)
    {
        $this->DBLoader= new DatabaseLoader();
    }
    public function render(array $GET, array $POST)
    {
        $sqlTeacherTable= $this->DBLoader->getConnection()->query('SELECT * FROM coaches');
        $teacherArray=[];
        while($row=$sqlTeacherTable->fetch()){
            $teacherArray[]=new Teacher($row[0], $row[1], $row[2]);
        }
        if(isset($POST['delete'])){
            $this->DBLoader->deleteTeacher($POST['delete']);
            header('location:index.php?page='.$GET['page']);
        }
        if(isset($POST['student'])){
            $requestedStudents = $this->DBLoader->getStudentByCoach($POST['student']);
        }
        require 'View/teacher.php';
    }
}