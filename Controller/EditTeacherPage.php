<?php

declare(strict_types=1);
class EditTeacherPage
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {
        $selectedCoach = $this->dbLoader->getTeacherById($GET['teacher']);
        //var_dump($selectedStudent);
        $sCoachId = $selectedCoach[0]['id'];
        $sCoachName = $selectedCoach[0]['coach_name'];
        $sCoachEmail = $selectedCoach[0]['email'];
        //$sStudentGroupId = $selectedStudent[0]['group_id'];
        //var_dump($groupFetch);
        if (isset($POST['updateCoach'])) {
            //var_dump($POST['newName']);
            $sCoachName = $_POST['newName'];
            $sCoachEmail = $_POST['newEmail'];
            //$sStudentGroupId = (int) $_POST['newGroupId'];
            $this->dbLoader->updateTeacher($sCoachId, $sCoachName, $sCoachEmail);
        }
        require 'View/editteacherpage.php';
    }
}