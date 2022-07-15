<?php

declare(strict_types=1);
class EditStudentPage
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {
        $selectedStudent = $this->dbLoader->getStudentById($GET['student']);
        var_dump($selectedStudent);
        $sStudentId = $selectedStudent[0]['id'];
        $sStudentName = $selectedStudent[0]['name'];
        $sStudentEmail = $selectedStudent[0]['email'];
        $sStudentGroupId = $selectedStudent[0]['group_id'];
        require 'View/editstudentpage.php';
    }
}
