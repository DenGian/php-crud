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
        //var_dump($selectedStudent);
        $sStudentId = $selectedStudent[0]['id'];
        $sStudentName = $selectedStudent[0]['firstname'];
        $sStudentEmail = $selectedStudent[0]['email'];
        $sStudentGroupId = $selectedStudent[0]['group_id'];
        $groupFetch = $this->dbLoader->getAllGroups();
        //var_dump($groupFetch);
        if (isset($POST['updateStudent'])) {
            //var_dump($POST['newName']);
            $sStudentName = $_POST['newName'];
            $sStudentEmail = $_POST['newEmail'];
            $sStudentGroupId = (int) $_POST['newGroupId'];
            $this->dbLoader->updateStudent($sStudentId, $sStudentName, $sStudentEmail, $sStudentGroupId);
        }
        require 'View/editstudentpage.php';
    }
}
